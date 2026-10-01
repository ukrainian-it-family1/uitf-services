<script setup lang="ts">
import { useTranslations } from '@/composables/useTranslations';
import WidthBox from './WidthBox.vue';
import SectionWrapper from './SectionWrapper.vue';
import ContactUsForm from './ContactUsForm.vue';
withDefaults(defineProps<{ analyticsFormName?: string; filled?: 'light' | 'dark' | null }>(), { filled: 'light' });
const { t } = useTranslations();
</script>
<template>
    <WidthBox :filled="filled">
        <SectionWrapper :label="t('Components.ContactBlock.Name')" :title="t('Components.ContactBlock.Title')">
            <ContactUsForm :analytics-form-name="analyticsFormName" description-field :file-label="t('Components.ContactBlock.FileLabel')" :form-description="t('Components.ContactBlock.FormDescription')" :form-label="t('Components.ContactBlock.FormLabel')" />
        </SectionWrapper>
    </WidthBox>
</template>
