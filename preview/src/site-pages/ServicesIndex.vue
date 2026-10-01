<script setup lang="ts">
// Replica of the live resources/js/pages/Services/Index.vue (preview only).
import { computed } from 'vue';
import AppLayout from '@/layouts/AppLayout.vue';
import SeoHead from '@/components/SeoHead.vue';
import WidthBox from '@/components/WidthBox.vue';
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import TitleSectionWrapper from '@/components/TitleSectionWrapper.vue';
import SectionWrapper from '@/components/SectionWrapper.vue';
import ServiceList from '@/components/ServiceList.vue';
import ExpertiseList from '@/components/ExpertiseList.vue';
import WhyUs from '@/components/WhyUs.vue';
import ContactBlock from '@/components/ContactBlock.vue';
import { useTranslations } from '@/composables/useTranslations';
const props = defineProps<{ services: any[]; expertise: any[]; whyUs: any[] }>();
const { t } = useTranslations();
const breadcrumbs = computed(() => [{ text: t('Views.Services.Breadcrumbs[0]'), href: '/' }, { text: t('Views.Services.Breadcrumbs[1]') }]);
</script>
<template>
    <AppLayout>
        <SeoHead :title="t('Views.Services.HeadTitle')" :description="t('Views.Services.MetaDescription')" />
        <div>
            <WidthBox><Breadcrumbs :items="breadcrumbs" centered /></WidthBox>
            <WidthBox>
                <TitleSectionWrapper :title="t('Views.Services.PageTitle')" :description="t('Views.Services.PageDescription')">
                    <ServiceList :items="props.services" />
                </TitleSectionWrapper>
            </WidthBox>
            <WidthBox filled="light">
                <SectionWrapper :label="t('Views.Services.ExpertiseListName')" :title="t('Views.Services.ExpertiseListTitles[0]')" :description="t('Views.Services.ExpertiseDescription')" question>
                    <ExpertiseList :items="props.expertise" />
                </SectionWrapper>
            </WidthBox>
            <WidthBox>
                <SectionWrapper :label="t('Views.ServicesOutsource.WhyUsName')" :title="t('Views.ServicesOutsource.WhyUsTitles')">
                    <WhyUs :items="props.whyUs" />
                </SectionWrapper>
            </WidthBox>
            <ContactBlock analytics-form-name="services_page" />
        </div>
    </AppLayout>
</template>
