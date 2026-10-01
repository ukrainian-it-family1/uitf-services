<script setup lang="ts">
defineProps<{ items: { id: string; name: string; image: string; description: string }[] }>();
</script>
<template>
    <div class="flex flex-wrap justify-center items-start gap-3">
        <div v-for="item in items" :key="item.id" class="w-[calc(16.6667%-10px)] max-[1024px]:w-[calc(25%-9px)] max-[768px]:w-[calc(50%-6px)] bg-white pt-8 px-6 pb-6 flex flex-col items-center h-[216px]">
            <div class="relative w-full h-[88px] mb-6 shrink-0"><img v-if="item.image" :src="item.image" :alt="`${item.name} logo`" class="w-full h-full object-contain" /></div>
            <div class="font-[Montserrat] font-semibold text-xs leading-[15px] uppercase text-[#01669c] mb-2 text-center">{{ item.name }}</div>
            <div class="font-[Montserrat] font-normal text-sm leading-[170%] text-center tracking-[0.04em] text-[#80b3ce]">{{ item.description }}</div>
        </div>
    </div>
</template>
