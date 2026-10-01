<script setup lang="ts">
defineProps<{ label: string; title?: string; secondTitle?: string; description?: string; big?: boolean; question?: boolean; titleColor?: string }>();
</script>
<template>
    <div :class="['w-full', big ? 'px-16 py-[120px] max-sm:px-3 max-sm:py-12 max-sm:pb-[120px]' : 'px-16 pt-16 pb-[120px] max-sm:px-3 max-sm:pt-12 max-sm:pb-[120px]']">
        <div class="flex items-center mb-6">
            <div class="w-1.5 h-1.5 rounded-full bg-[#ffc20f] mr-3 shrink-0" />
            <div :class="['font-[Montserrat] font-semibold text-xs leading-[15px] uppercase tracking-[0.04em]', titleColor === 'secondary' ? 'text-white' : 'text-[#80b3ce]']">{{ label }}</div>
        </div>
        <div class="flex justify-between items-center mb-16">
            <div>
                <h2 v-if="title" :class="['font-[Montserrat] font-bold text-[40px] leading-[49px] uppercase max-sm:text-[32px] max-sm:leading-[39px]', titleColor === 'secondary' ? 'text-white' : 'text-[#01669c]']">
                    <span class="block">{{ title }}<span class="text-[#ffc20f]">{{ question ? '?' : '.' }}</span></span>
                </h2>
            </div>
        </div>
        <div v-if="description" class="mb-6 font-[Montserrat] font-medium text-base leading-[150%] tracking-[0.04em] text-[#01669c]">{{ description }}</div>
        <slot />
    </div>
</template>
