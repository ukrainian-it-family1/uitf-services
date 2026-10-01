<script setup lang="ts">
import type { TitledItem } from './useContent';

defineProps<{
    items: TitledItem[];
    closing?: string;
}>();

function number(index: number): string {
    return String(index + 1).padStart(2, '0');
}
</script>

<template>
    <div class="flex flex-col gap-y-12">
        <ul class="grid grid-cols-2 gap-3 max-[1024px]:grid-cols-1">
            <li
                v-for="(item, index) in items"
                :key="item.title"
                class="flex gap-x-6 p-10 max-sm:p-6"
                :class="index % 3 === 0 ? 'bg-[#fffcf3]' : 'bg-[#f2f7fa]'"
            >
                <span
                    class="font-[Montserrat] font-bold text-[28px] leading-[130%] tracking-[0.04em] text-[#ffc20f] shrink-0"
                    aria-hidden="true"
                >
                    {{ number(index) }}
                </span>
                <div class="flex flex-col gap-y-3">
                    <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                        {{ item.title }}
                    </h3>
                    <p class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]">
                        {{ item.text }}
                    </p>
                </div>
            </li>
        </ul>

        <p
            v-if="closing"
            class="max-w-[780px] border-l-4 border-[#ffc20f] pl-6 font-[Montserrat] font-semibold text-xl leading-[150%] text-[#01669c]"
        >
            {{ closing }}
        </p>
    </div>
</template>
