<script setup lang="ts">
// Simplified header and footer, only so the preview reads like the real page.
import { Link, usePage, withoutBase } from '@inertiajs/vue3';
import { useTranslations } from '@/composables/useTranslations';
const page = usePage<any>();
const { localePath, locale, t } = useTranslations();
const switchTo = (to: string) => withoutBase(location.pathname).replace(/^\/(en|uk)/, `/${to}`) + location.search;
</script>
<template>
    <div>
        <div class="w-full bg-[#011520]">
            <div class="mx-auto flex max-w-[1440px] items-center justify-between gap-x-6 px-16 py-2 font-[Montserrat] text-xs font-medium tracking-[0.04em] text-white max-[768px]:px-3">
                <span>{{ locale === 'uk' ? 'Попередній перегляд для погодження. Це не живий сайт.' : 'Preview for approval. This is not the live site.' }}</span>
                <Link href="/" class="shrink-0 font-semibold uppercase tracking-[0.08em] text-[#ffc20f] hover:text-[#ffe187]">{{ locale === 'uk' ? '← Усі сторінки' : '← All pages' }}</Link>
            </div>
        </div>
        <div class="sticky top-0 z-50 h-[94px] w-full bg-white max-[1200px]:h-20">
            <header class="mx-auto flex max-w-[1440px] items-center justify-between gap-x-12 px-16 py-3 max-[768px]:px-3">
                <Link :href="localePath('/services')"><img src="/static/images/logo-full.svg" alt="Ukrainian IT Family logo" width="120" height="70" /></Link>
                <nav class="flex items-center gap-x-8 max-[1024px]:hidden">
                    <Link v-for="item in page.props.navigation?.headerItems ?? []" :key="item.text" :href="localePath(item.link)" class="font-[Montserrat] font-semibold text-sm leading-[17px] tracking-[0.08em] uppercase text-[#01669c]">{{ item.text }}</Link>
                    <span class="flex items-center gap-x-3 font-[Montserrat] font-semibold text-sm tracking-[0.08em] uppercase">
                        <Link :href="switchTo('uk')" :class="locale === 'uk' ? 'text-[#01669c]' : 'text-[#80b3ce]'">UA</Link>
                        <span class="text-[#01669c]">|</span>
                        <Link :href="switchTo('en')" :class="locale === 'en' ? 'text-[#01669c]' : 'text-[#80b3ce]'">EN</Link>
                    </span>
                    <Link :href="localePath('/contacts')" class="font-[Montserrat] font-semibold text-sm tracking-[0.08em] uppercase text-[#ffc20f]">{{ t('Components.Header.Contact') }}</Link>
                </nav>
            </header>
        </div>
        <main><slot /></main>
        <footer class="mx-auto max-w-[1440px] px-16 py-20 max-sm:px-3">
            <div class="flex flex-wrap items-center justify-between gap-8 border-t border-[#dbeaf1] pt-12">
                <img src="/static/images/logo-full.svg" alt="" width="120" height="70" />
                <div class="flex flex-wrap gap-x-12 gap-y-4">
                    <div v-for="s in page.props.navigation?.footerStats ?? []" :key="s.label" class="flex items-center gap-x-3">
                        <span class="font-[Montserrat] font-bold text-3xl text-[#01669c]">{{ s.value }}</span>
                        <span class="font-[Montserrat] text-sm text-[#80b3ce]">{{ s.label }}</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
