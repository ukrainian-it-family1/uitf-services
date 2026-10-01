import { fileURLToPath, URL } from 'node:url';
import { defineConfig, type Plugin } from 'vite';
import vue from '@vitejs/plugin-vue';
import tailwindcss from '@tailwindcss/vite';

const r = (p: string) => fileURLToPath(new URL(p, import.meta.url));
const LIVE_SITE = 'https://ukrainian-it.family';

// Site images (/static, /storage) load straight from the live site,
// so the preview works from a clone or any static host without a proxy.
function liveAssets(): Plugin {
    return {
        name: 'uitf-live-assets',
        transform(code, id) {
            if (id.includes('node_modules')) return null;
            const next = code.replace(/(["'`])\/(static|storage)\//g, `$1${LIVE_SITE}/$2/`);
            return next === code ? null : { code: next, map: null };
        },
    };
}

export default defineConfig({
    base: process.env.PREVIEW_BASE ?? '/',
    plugins: [
        // Same asset URL handling as laravel-vite-plugin: absolute paths stay as they are.
        vue({ template: { transformAssetUrls: { base: null, includeAbsolute: false } } }),
        liveAssets(),
        tailwindcss(),
    ],
    resolve: {
        alias: [
            // Deliverable code, used as-is.
            { find: '@/components/services', replacement: r('../frontend/resources/js/components/services') },
            { find: '@/pages', replacement: r('../frontend/resources/js/pages') },
            // Stand-ins for the client's existing components and Inertia.
            { find: '@inertiajs/vue3', replacement: r('./src/inertia-stub.ts') },
            { find: /^@\//, replacement: r('./src/stubs/') },
        ],
    },
    server: { port: 5180, fs: { allow: [r('..')] } },
    preview: { port: 5180 },
});
