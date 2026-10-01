<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { useTranslations } from '@/composables/useTranslations';
import MainButton from './MainButton.vue';
defineProps<{ projects: any[]; moreButton?: boolean }>();
const { t, localePath, locale } = useTranslations();
const big = (i: number) => (i + 1 - 2) % 4 === 0 || (i + 1 - 3) % 4 === 0;
</script>
<template>
    <div class="w-full">
        <div class="grid grid-cols-2 gap-3 max-[1024px]:grid-cols-1">
            <div v-for="(p, i) in projects" :key="p.id" :class="['p-10 max-[480px]:p-3 w-full flex flex-col gap-4', big(i) ? 'bg-[#fffcf3]' : 'bg-[#f2f7fa]']">
                <Link :href="`/${locale}/portfolio/${p.slug}`" class="font-[Montserrat] font-semibold text-[32px] leading-9.75 text-[#01669c]">{{ p.name }}</Link>
                <div class="flex flex-wrap gap-3">
                    <span v-for="tag in p.tags" :key="tag" class="px-4 py-3 bg-[#dbeaf1] font-[Montserrat] font-semibold text-sm leading-4.25 tracking-[0.08em] uppercase text-[#01669c]">{{ tag }}</span>
                </div>
                <div class="font-[Montserrat] text-base leading-relaxed tracking-[0.04em] text-[#3485b0] line-clamp-2">{{ p.description }}</div>
                <img :src="p.smallPreviewImage" :alt="p.name" class="w-full aspect-4/3 object-contain" loading="lazy" />
            </div>
        </div>
        <div v-if="moreButton" class="mt-16">
            <MainButton type="link" :href="localePath('/portfolio')" width="100%" variant="secondary" size="big">{{ t('Components.PortfolioList.MainButton') }}</MainButton>
        </div>
    </div>
</template>
