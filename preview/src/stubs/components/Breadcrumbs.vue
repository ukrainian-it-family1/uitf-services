<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { useTranslations } from '@/composables/useTranslations';
defineProps<{ items: { text: string; href?: string }[]; centered?: boolean }>();
const { localePath } = useTranslations();
</script>
<template>
    <nav aria-label="Breadcrumb" class="px-16 py-12 max-sm:px-3 max-sm:py-8 max-sm:pb-10">
        <div :class="['flex items-center gap-x-3', centered ? 'justify-center max-sm:justify-start' : '']">
            <template v-for="(item, i) in items" :key="i">
                <span v-if="i > 0" class="leading-none rotate-[-90deg] max-sm:rotate-90" aria-hidden="true">
                    <img src="/static/images/arrow-down-blue.svg" alt="" width="16" height="16" />
                </span>
                <Link v-if="item.href" :href="localePath(item.href)" class="font-[Montserrat] font-semibold text-sm leading-[17px] tracking-[0.08em] uppercase text-[#01669c] transition-all duration-500 hover:text-[#80b3ce] cursor-pointer">{{ item.text }}</Link>
                <span v-else class="font-[Montserrat] font-semibold text-sm leading-[17px] tracking-[0.08em] uppercase text-[#80b3ce]">{{ item.text }}</span>
            </template>
        </div>
    </nav>
</template>
