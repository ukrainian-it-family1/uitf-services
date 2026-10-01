<script setup lang="ts">
import { MainButton, SectionWrapper, WidthBox, useTranslations } from './existing';

withDefaults(
    defineProps<{
        label: string;
        title: string;
        text: string;
        buttonText: string;
        href: string;
        filled?: 'light' | 'dark' | null;
        question?: boolean;
    }>(),
    { filled: 'light', question: false },
);

const { localePath } = useTranslations();
</script>

<template>
    <WidthBox :filled="filled">
        <SectionWrapper :label="label" :title="title" :description="text" :question="question">
            <MainButton type="link" :href="localePath(href)" size="big">
                {{ buttonText }}
            </MainButton>
        </SectionWrapper>
    </WidthBox>
</template>
