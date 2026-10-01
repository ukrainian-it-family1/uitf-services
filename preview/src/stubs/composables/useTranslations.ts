// Mirror of the site's translation composable: { t, locale, localePath }.
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

function lookup(messages: any, path: string, fallback: string): string {
    let node = messages;
    for (const part of path.split('.')) {
        const m = part.match(/^(.+)\[(\d+)\]$/);
        if (m) {
            const arr = node?.[m[1]];
            if (!Array.isArray(arr)) return fallback;
            node = arr[Number(m[2])];
        } else {
            node = node?.[part];
        }
        if (node === undefined) return fallback;
    }
    return typeof node === 'string' ? node : fallback;
}

export function useTranslations() {
    const page = usePage<any>();
    const locale = computed(() => page.props.locale ?? 'en');
    const t = (key: string, params?: Record<string, string>) => {
        const value = lookup(page.props.translations?.messages, key, key);
        return params ? value.replace(/\{(\w+)\}/g, (s, k) => (k in params ? String(params[k]) : s)) : value;
    };
    const localePath = (path: string) =>
        !path.startsWith('/') || path.startsWith('//') ? path : path === '/' ? `/${locale.value}` : `/${locale.value}${path}`;
    return { t, locale, localePath };
}
