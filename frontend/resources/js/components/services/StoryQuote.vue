<script setup lang="ts">
defineProps<{
    text: string;
}>();
</script>

<template>
    <blockquote
        class="max-w-[780px] border-l-4 border-[#ffc20f] pl-6 font-[Montserrat] font-semibold text-2xl leading-[150%] text-[#01669c] max-sm:text-xl"
    >
        {{ text }}
    </blockquote>
</template>
