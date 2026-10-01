<script setup lang="ts">
defineProps<{ items: { id: string; name: string; description: string }[] }>();
</script>
<template>
    <div class="w-full flex justify-center flex-wrap">
        <div v-for="(item, i) in items" :key="item.id" :class="['w-1/4 max-[1024px]:w-full p-10', i % 2 === 1 ? 'bg-[#fffcf3]' : 'bg-[#f2f7fa]']">
            <div class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c] mb-6">{{ item.name }}</div>
            <div class="font-[Montserrat] font-normal text-sm leading-[170%] tracking-[0.04em] text-[#01669c]">{{ item.description }}</div>
        </div>
    </div>
</template>
