<script setup lang="ts">
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
const props = withDefaults(defineProps<{ type?: string; variant?: string; href?: string; size?: string; width?: string }>(), { type: 'button', variant: 'primary', size: 'small' });
const cls = computed(() => [
    'inline-flex items-center justify-center gap-x-3 font-[Montserrat] font-semibold text-base leading-5 tracking-[0.04em] uppercase transition-all duration-500 cursor-pointer',
    props.size === 'big' ? 'h-[72px] px-8 py-6' : 'h-12 px-8 py-3',
    props.variant === 'primary' && 'bg-[#01669c] border border-[#01669c] text-white hover:bg-[#3485b0] hover:border-[#3485b0]',
    props.variant === 'secondary' && 'bg-[#f2f7fa] border border-[#f2f7fa] text-[#01669c] hover:bg-[#dbeaf1] hover:border-[#dbeaf1]',
    props.variant === 'outlined' && 'border border-[#01669c] text-[#01669c] hover:bg-[rgba(1,102,156,0.1)]',
].filter(Boolean).join(' '));
const icon = computed(() => (props.variant === 'primary' ? '/static/images/arrow-white.svg' : '/static/images/arrow-blue.svg'));
</script>
<template>
    <Link v-if="type === 'link'" :href="href" :class="cls" :style="width ? { width } : undefined"><span><slot /></span><img :src="icon" alt="" width="24" height="24" /></Link>
    <button v-else :type="type === 'submit' ? 'submit' : 'button'" :class="cls" :style="width ? { width } : undefined"><span><slot /></span><img :src="icon" alt="" width="24" height="24" /></button>
</template>
