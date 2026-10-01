"""Convert the restricted PHP array syntax used in lang/*.php into JSON (preview only)."""
import json, re, sys

def tokenize(src):
    src = re.sub(r'//[^\n]*', '', src)
    src = src.replace('<?php', '').strip()
    i, toks = 0, []
    while i < len(src):
        c = src[i]
        if c.isspace(): i += 1; continue
        if src.startswith('=>', i): toks.append('=>'); i += 2; continue
        if c in '[],;': toks.append(c); i += 1; continue
        if c == "'":
            j, buf = i + 1, ''
            while src[j] != "'":
                if src[j] == '\\': buf += src[j + 1]; j += 2; continue
                buf += src[j]; j += 1
            toks.append(('str', buf)); i = j + 1; continue
        m = re.match(r'return|null|true|false', src[i:])
        if m: toks.append(m.group(0)); i += len(m.group(0)); continue
        raise SyntaxError(f'unexpected {src[i:i+20]!r}')
    return toks

def parse(toks):
    pos = 0
    def value():
        nonlocal pos
        t = toks[pos]
        if t == '[': return array()
        pos += 1
        if t == 'null': return None
        if t in ('true', 'false'): return t == 'true'
        return t[1]
    def array():
        nonlocal pos
        pos += 1
        items, is_map = [], False
        while toks[pos] != ']':
            v = value()
            if toks[pos] == '=>':
                pos += 1; is_map = True; items.append((v, value()))
            else:
                items.append((None, v))
            if toks[pos] == ',': pos += 1
        pos += 1
        return dict(items) if is_map else [v for _, v in items]
    assert toks[pos] == 'return'; pos += 1
    return value()

print(json.dumps(parse(tokenize(open(sys.argv[1], encoding='utf-8').read())), ensure_ascii=False))
