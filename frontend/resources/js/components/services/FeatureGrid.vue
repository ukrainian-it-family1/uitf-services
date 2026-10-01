<script setup lang="ts">
import type { TitledItem } from './useContent';

withDefaults(
    defineProps<{
        items: TitledItem[];
        columns?: 2 | 3 | 4;
        onLight?: boolean;
    }>(),
    { columns: 3, onLight: false },
);

const columnClass: Record<number, string> = {
    2: 'grid-cols-2',
    3: 'grid-cols-3',
    4: 'grid-cols-4',
};
</script>

<template>
    <ul class="grid gap-3 max-[1024px]:grid-cols-1" :class="columnClass[columns]">
        <li
            v-for="(item, index) in items"
            :key="item.title"
            class="flex flex-col gap-y-6 p-10 max-sm:p-6"
            :class="onLight ? 'bg-white' : index % 2 === 1 ? 'bg-[#fffcf3]' : 'bg-[#f2f7fa]'"
        >
            <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                {{ item.title }}
            </h3>
            <p class="font-[Montserrat] font-normal text-sm leading-[170%] tracking-[0.04em] text-[#01669c]">
                {{ item.text }}
            </p>
        </li>
    </ul>
</template>
