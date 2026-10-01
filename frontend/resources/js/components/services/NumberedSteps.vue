<script setup lang="ts">
import type { TitledItem } from './useContent';

withDefaults(
    defineProps<{
        items: TitledItem[];
        vertical?: boolean;
    }>(),
    { vertical: false },
);

// Same step palette as the process block on /services/product-development.
const palette = ['#dbeaf1', '#b2d1e1', '#80b3ce', '#01669c', '#ffc20f'];

function number(index: number): string {
    return String(index + 1).padStart(2, '0');
}
</script>

<template>
    <ol
        class="grid gap-3"
        :class="vertical ? 'grid-cols-1' : 'grid-cols-4 max-[1024px]:grid-cols-2 max-sm:grid-cols-1'"
    >
        <li v-for="(item, index) in items" :key="item.title" class="flex flex-col gap-y-4">
            <div class="h-2 w-full" :style="{ background: palette[index % palette.length] }" aria-hidden="true"></div>
            <div class="flex gap-x-4" :class="vertical ? 'flex-row' : 'flex-col gap-y-2'">
                <span
                    class="font-[Montserrat] font-bold text-[28px] leading-[130%] tracking-[0.04em] text-[#ffc20f] shrink-0"
                    :class="vertical ? 'w-12' : ''"
                    aria-hidden="true"
                >
                    {{ number(index) }}
                </span>
                <div class="flex flex-col gap-y-2">
                    <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                        {{ item.title }}
                    </h3>
                    <p class="font-[Montserrat] font-normal text-sm leading-[170%] tracking-[0.04em] text-[#01669c]">
                        {{ item.text }}
                    </p>
                </div>
            </div>
        </li>
    </ol>
</template>
