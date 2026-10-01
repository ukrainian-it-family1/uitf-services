<script setup lang="ts">
// Replica of the live resources/js/pages/Services/Outsource.vue (preview only).
import { computed } from 'vue';
import AppLayout from '@/layouts/AppLayout.vue';
import SeoHead from '@/components/SeoHead.vue';
import WidthBox from '@/components/WidthBox.vue';
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import TitleSectionWrapper from '@/components/TitleSectionWrapper.vue';
import SectionWrapper from '@/components/SectionWrapper.vue';
import ServiceProcess from '@/components/ServiceProcess.vue';
import ContactBlock from '@/components/ContactBlock.vue';
import WhyUs from '@/components/WhyUs.vue';
import ExpertiseList from '@/components/ExpertiseList.vue';
import PortfolioList from '@/components/PortfolioList.vue';
import { useTranslations } from '@/composables/useTranslations';
const props = defineProps<{ outsourceSteps: any[]; whyUs: any[]; expertise: any[]; projects: any[] }>();
const { t } = useTranslations();
const NS = 'Views.ServicesOutsource';
const breadcrumbs = computed(() => [
    { text: t(`${NS}.Breadcrumbs[0]`), href: '/' },
    { text: t(`${NS}.Breadcrumbs[1]`), href: '/services' },
    { text: t(`${NS}.Breadcrumbs[2]`) },
]);
</script>
<template>
    <AppLayout>
        <SeoHead :title="t(`${NS}.HeadTitle`)" :description="t(`${NS}.MetaDescription`)" />
        <div>
            <WidthBox><Breadcrumbs :items="breadcrumbs" centered /></WidthBox>
            <WidthBox><TitleSectionWrapper :title="t(`${NS}.PageTitle`)" :description="t(`${NS}.PageDescription`)" small /></WidthBox>
            <WidthBox>
                <SectionWrapper :label="t(`${NS}.ServiceProcessName`)" :title="t(`${NS}.ServiceProcessTitles`)"><ServiceProcess :steps="props.outsourceSteps" /></SectionWrapper>
            </WidthBox>
            <ContactBlock analytics-form-name="services_outsource_page" />
            <WidthBox>
                <SectionWrapper :label="t(`${NS}.WhyUsName`)" :title="t(`${NS}.WhyUsTitles`)"><WhyUs :items="props.whyUs" /></SectionWrapper>
            </WidthBox>
            <WidthBox filled="light">
                <SectionWrapper :label="t(`${NS}.ExpertiseListName`)" :title="t(`${NS}.ExpertiseListTitles[0]`)" :description="t(`${NS}.ExpertiseDescription`)" question><ExpertiseList :items="props.expertise" /></SectionWrapper>
            </WidthBox>
            <WidthBox>
                <SectionWrapper big :label="t(`${NS}.PortfolioName`)" :title="t(`${NS}.PortfolioTitles`)"><PortfolioList :projects="props.projects.slice(0, 4)" more-button /></SectionWrapper>
            </WidthBox>
        </div>
    </AppLayout>
</template>
