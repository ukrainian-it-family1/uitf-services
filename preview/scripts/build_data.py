"""Build src/data/<locale>.json for the preview from the live site + our lang file."""
import json, re, subprocess, sys, urllib.request, pathlib

ROOT = pathlib.Path(__file__).resolve().parent.parent
FRONTEND = ROOT.parent / 'frontend'
OUT = ROOT / 'src' / 'data'; OUT.mkdir(parents=True, exist_ok=True)

def page_data(url):
    html = urllib.request.urlopen(urllib.request.Request(url, headers={'User-Agent': 'preview'})).read().decode()
    raw = re.search(r'<script data-page="app" type="application/json">(.*?)</script>', html, re.S).group(1)
    return json.loads(raw)['props']

for locale in ('en', 'uk'):
    pd = page_data(f'https://ukrainian-it.family/{locale}/services/product-development')
    pf = page_data(f'https://ukrainian-it.family/{locale}/portfolio')
    messages = pd['translations']['messages']
    lang = FRONTEND / 'lang' / locale / 'services-pages.php'
    if lang.exists():
        ours = json.loads(subprocess.check_output([sys.executable, str(ROOT / 'scripts' / 'php_to_json.py'), str(lang)]))
        messages['Views'].update(ours)
    by_slug = {p['slug']: p for p in pf['projects']}
    data = {
        'locale': locale,
        'messages': messages,
        'navigation': pd['navigation'],
        'outsourceSteps': pd['outsourceSteps'],
        'whyUs': pd['whyUs'],
        # Hub cards with the links the backend should send once the new pages are live.
        'services': [dict(item, link=link) for item, link in zip(
            page_data(f'https://ukrainian-it.family/{locale}/services')['services'],
            ['/services/operations-platforms', '/services/regulated-products', '/services/rescue-and-restart'],
        )],
        'expertise': pd['expertise'],
        'productDevelopmentProjects': pd['projects'],
        'operationsProjects': [by_slug[s] for s in ('yachtomator', 'automarket', 'real-estate-crm', 'expertland') if s in by_slug],
    }
    (OUT / f'{locale}.json').write_text(json.dumps(data, ensure_ascii=False))
    print(locale, 'ok', 'our keys' if lang.exists() else 'NO lang file yet', len(data['operationsProjects']), 'projects')
