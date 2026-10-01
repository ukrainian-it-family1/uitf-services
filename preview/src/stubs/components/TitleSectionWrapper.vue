<script setup lang="ts">
defineProps<{ title: string; description?: string; small?: boolean }>();
</script>
<template>
    <div :class="['w-full px-16 max-sm:px-3', small ? 'pb-14 max-sm:pb-16' : 'pb-[120px] max-sm:pb-16']">
        <div class="flex flex-col text-center mb-24 max-sm:mb-0">
            <h1 class="font-[Montserrat] font-bold text-[40px] leading-[49px] uppercase text-[#01486e] mb-4 max-sm:text-[32px] max-sm:leading-[39px]">{{ title }}</h1>
            <div v-if="description" :class="['font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]', small ? '' : 'max-sm:mb-6']">{{ description }}</div>
        </div>
        <slot />
    </div>
</template>
