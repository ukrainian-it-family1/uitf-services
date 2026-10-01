<script setup lang="ts">
import { MainButton, useTranslations } from './existing';

defineProps<{
    href: string;
    buttonText: string;
    caption?: string;
}>();

// TitleSectionWrapper keeps a 96px gap under its text, so the CTA is pulled up with -mt-12.
const { localePath } = useTranslations();
</script>

<template>
    <div class="-mt-12 flex flex-col items-center gap-y-4 max-sm:mt-8">
        <MainButton type="link" :href="localePath(href)" size="big">
            {{ buttonText }}
        </MainButton>
        <div
            v-if="caption"
            class="font-[Montserrat] font-medium text-sm leading-[17px] tracking-[0.04em] text-[#80b3ce]"
        >
            {{ caption }}
        </div>
    </div>
</template>
