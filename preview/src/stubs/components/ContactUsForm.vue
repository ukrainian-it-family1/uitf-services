<script setup lang="ts">
// Visual stand-in for the site's ContactUsForm (no validation or submit in the preview).
import { useTranslations } from '@/composables/useTranslations';
import MainButton from './MainButton.vue';
defineProps<{ formLabel?: string; formDescription?: string; fileLabel?: string; descriptionField?: boolean; analyticsFormName?: string }>();
const { t } = useTranslations();
const input = 'w-full flex items-center p-4 bg-white border border-[#b2d1e1] font-[Montserrat] font-medium text-base leading-relaxed tracking-[0.04em] text-[#01669c] placeholder:font-normal placeholder:text-[#3485b0]';
const label = 'font-[Montserrat] font-medium text-base leading-relaxed tracking-[0.04em] text-[#01669c]';
</script>
<template>
    <div class="relative w-full max-w-164 bg-[#f2f7fa]" :data-form="analyticsFormName">
        <form class="flex flex-col gap-y-4 py-4" :aria-label="formLabel" @submit.prevent>
            <div class="flex flex-col gap-y-2">
                <div class="font-[Montserrat] font-bold text-[32px] leading-[39px] uppercase text-[#01669c]">{{ formLabel }}<span class="text-[#ffc20f]">.</span></div>
                <div v-if="formDescription" class="font-[Montserrat] text-base leading-relaxed tracking-[0.04em] text-[#01669c]">{{ formDescription }}</div>
            </div>
            <label :class="label">{{ t('Components.ContactUsForm.NameLabel') }} <span class="text-[#df3737]">*</span></label>
            <input :class="input" :placeholder="t('Components.ContactUsForm.NamePlaceholder')" />
            <label :class="label">{{ t('Components.ContactUsForm.EmailLabel') }} <span class="text-[#df3737]">*</span></label>
            <input :class="input" :placeholder="t('Components.ContactUsForm.EmailPlaceholder')" />
            <div v-if="fileLabel" :class="label">{{ fileLabel }}</div>
            <div v-if="fileLabel" class="w-full h-14 flex justify-center items-center border border-[#01669c] font-[Montserrat] font-semibold text-base uppercase text-[#01669c]">{{ t('Components.ContactUsForm.UploadButtonText') }}</div>
            <template v-if="descriptionField">
                <label :class="label">{{ t('Components.ContactUsForm.DescriptionLabel') }} <span class="text-[#df3737]">*</span></label>
                <textarea :class="[input, 'h-32']"></textarea>
            </template>
            <label class="flex items-start gap-x-3 font-[Montserrat] font-medium text-sm leading-relaxed tracking-[0.04em] text-[#01669c]"><input type="checkbox" class="mt-1" /> <span>{{ t('Components.ContactUsForm.ConsentText') }} <a href="#" class="underline">{{ t('Components.ContactUsForm.ConsentLinkText') }}</a></span></label>
            <div class="flex flex-col gap-y-3">
                <MainButton type="submit" width="100%">{{ t('Components.ContactUsForm.SubmitButtonText') }}</MainButton>
                <MainButton type="button" variant="outlined" width="100%">{{ t('Components.ContactUsForm.BookCallButtonText') }}</MainButton>
            </div>
        </form>
    </div>
</template>
