<script setup lang="ts">
defineProps<{ filled?: 'light' | 'dark' | null; small?: boolean }>();
</script>
<template>
    <div :class="['w-full', filled === 'light' && 'bg-[#f2f7fa]', filled === 'dark' && 'bg-[#011520]']">
        <div :class="['mx-auto w-full', small ? 'max-w-[1002px]' : 'max-w-[1440px]']"><slot /></div>
    </div>
</template>
