// Minimal stand-in for @inertiajs/vue3 so the pages render outside Laravel.
import { defineComponent, h, reactive } from 'vue';

export const pageState = reactive<{ props: Record<string, any>; url: string }>({ props: {}, url: '/' });

export function usePage<T = Record<string, any>>() {
    return pageState as unknown as { props: T; url: string };
}

// The preview may be served from a sub-path (GitHub Pages: /<repo>/).
const BASE = import.meta.env.BASE_URL.replace(/\/$/, '');

export function withBase(href: string): string {
    if (!href.startsWith('/') || href.startsWith('//') || (BASE && href.startsWith(`${BASE}/`))) return href;
    return `${BASE}${href}`;
}

export function withoutBase(path: string): string {
    return BASE && path.startsWith(BASE) ? path.slice(BASE.length) || '/' : path;
}

export const Link = defineComponent({
    props: { href: { type: String, default: '#' } },
    setup(props, { slots, attrs }) {
        return () => h('a', { ...attrs, href: withBase(props.href) }, slots.default?.());
    },
});

export const Head = defineComponent({ setup: (_, { slots }) => () => null });
