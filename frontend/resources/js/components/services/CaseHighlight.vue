<script setup lang="ts">
import { MainButton, useTranslations } from './existing';
import type { Fact } from './useContent';

defineProps<{
    tags: string[];
    paragraphs: string[];
    facts: Fact[];
    linkText: string;
    link: string;
}>();

const { localePath } = useTranslations();
</script>

<template>
    <div class="flex flex-col gap-y-12">
        <div v-if="tags.length" class="flex flex-wrap gap-3">
            <span
                v-for="tag in tags"
                :key="tag"
                class="bg-[#dbeaf1] px-4 py-3 font-[Montserrat] font-semibold text-sm leading-[17px] tracking-[0.08em] uppercase text-[#01669c]"
            >
                {{ tag }}
            </span>
        </div>

        <div class="flex flex-col gap-y-6 max-w-[780px]">
            <p
                v-for="paragraph in paragraphs"
                :key="paragraph"
                class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]"
            >
                {{ paragraph }}
            </p>
        </div>

        <dl class="grid grid-cols-3 gap-3 max-[1024px]:grid-cols-1">
            <div
                v-for="fact in facts"
                :key="fact.title"
                class="flex flex-col gap-y-3 bg-[#fffcf3] px-8 py-6"
            >
                <dt class="font-[Montserrat] font-bold text-[28px] leading-[130%] tracking-[0.04em] uppercase text-[#ffc20f]">
                    {{ fact.title }}
                </dt>
                <dd class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]">
                    {{ fact.description }}
                </dd>
            </div>
        </dl>

        <div>
            <MainButton type="link" :href="localePath(link)" variant="outlined">
                {{ linkText }}
            </MainButton>
        </div>
    </div>
</template>
