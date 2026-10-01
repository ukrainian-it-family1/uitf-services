<script setup lang="ts">
import type { FaqItem } from './useContent';

defineProps<{
    items: FaqItem[];
}>();
</script>

<template>
    <div class="flex flex-col border-t border-[#b2d1e1] max-w-[1002px]">
        <details
            v-for="item in items"
            :key="item.question"
            class="group border-b border-[#b2d1e1]"
        >
            <summary
                class="flex cursor-pointer list-none items-center justify-between gap-x-6 py-8 font-[Montserrat] font-semibold text-xl leading-[150%] text-[#01669c] transition-all duration-500 hover:text-[#3485b0] max-sm:py-6 max-sm:text-lg [&::-webkit-details-marker]:hidden"
            >
                <span>{{ item.question }}</span>
                <span
                    class="relative h-6 w-6 shrink-0 before:absolute before:left-0 before:top-1/2 before:h-0.5 before:w-6 before:-translate-y-1/2 before:bg-[#ffc20f] after:absolute after:left-1/2 after:top-0 after:h-6 after:w-0.5 after:-translate-x-1/2 after:bg-[#ffc20f] after:transition-transform after:duration-300 group-open:after:scale-y-0"
                    aria-hidden="true"
                ></span>
            </summary>
            <p
                class="max-w-[780px] pb-8 font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]"
            >
                {{ item.answer }}
            </p>
        </details>
    </div>
</template>
