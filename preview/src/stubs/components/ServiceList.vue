<script setup lang="ts">
import { useTranslations } from '@/composables/useTranslations';
import MainButton from './MainButton.vue';
defineProps<{ items: { name: string; description: string; link: string }[] }>();
const { t, locale } = useTranslations();
const dark = (i: number) => (i + 1 - 2) % 4 === 0 || (i + 1 - 3) % 4 === 0;
</script>
<template>
    <div class="flex justify-between items-stretch flex-wrap gap-y-12 gap-x-3">
        <div v-for="(item, i) in items" :key="item.name" :class="['group w-[calc(50%-6px)] max-[1024px]:w-full max-[1024px]:flex-col p-6 pb-24 max-[1024px]:pb-6 flex items-start justify-between relative', dark(i) ? 'bg-[#01669c] text-[#f2f7fa]' : 'bg-[#f2f7fa] text-[#01669c]']">
            <div class="w-80 mt-4 ml-4 max-[480px]:w-full max-[480px]:ml-0">
                <div class="font-[Montserrat] font-semibold text-[32px] leading-[39px] mb-8">{{ item.name }}</div>
                <div class="font-[Montserrat] font-normal text-base leading-relaxed tracking-[0.04em]">{{ item.description }}</div>
            </div>
            <div class="absolute left-0 bottom-0 w-full transition-all duration-500 opacity-0 group-hover:opacity-100 max-[1024px]:static max-[1024px]:mt-4 max-[1024px]:opacity-100">
                <MainButton type="link" :href="`/${locale}${item.link}`" width="100%" :variant="dark(i) ? 'secondary' : 'primary'" size="big">{{ t('Components.ServiceList.ButtonText') }}</MainButton>
            </div>
        </div>
    </div>
</template>
