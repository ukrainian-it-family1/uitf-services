<script setup lang="ts">
import { computed } from 'vue';
import {
    AppLayout,
    Breadcrumbs,
    SectionWrapper,
    SeoHead,
    TitleSectionWrapper,
    WhyUs,
    WidthBox,
    useTranslations,
} from '@/components/services/existing';
import { useContent, type FaqItem, type TitledItem } from '@/components/services/useContent';
import HeroActions from '@/components/services/HeroActions.vue';
import PainGrid from '@/components/services/PainGrid.vue';
import FeatureGrid from '@/components/services/FeatureGrid.vue';
import NumberedSteps from '@/components/services/NumberedSteps.vue';
import StoryQuote from '@/components/services/StoryQuote.vue';
import FaqList from '@/components/services/FaqList.vue';
import EstimateCta from '@/components/services/EstimateCta.vue';
import { faqJsonLd } from '@/components/services/faqJsonLd';

const props = defineProps<{
    whyUs?: unknown[];
}>();

const NS = 'Views.ServicesRescue';
const { t } = useTranslations();

const breadcrumbs = computed(() => [
    { text: t(`${NS}.Breadcrumbs[0]`), href: '/' },
    { text: t(`${NS}.Breadcrumbs[1]`), href: '/services' },
    { text: t(`${NS}.Breadcrumbs[2]`) },
]);

const triggers = useContent<TitledItem[]>(`${NS}.TriggerItems`, []);
const argument = useContent<string[]>(`${NS}.ArgumentParagraphs`, []);
const deliverables = useContent<TitledItem[]>(`${NS}.DeliverableItems`, []);
const auditSteps = useContent<TitledItem[]>(`${NS}.AuditSteps`, []);
const proof = useContent<TitledItem[]>(`${NS}.ProofItems`, []);
const faq = useContent<FaqItem[]>(`${NS}.FaqItems`, []);

const whyUs = computed(() => props.whyUs ?? []);
const jsonLd = computed(() => faqJsonLd(faq.value));
</script>

<template>
    <AppLayout>
        <SeoHead :title="t(`${NS}.HeadTitle`)" :description="t(`${NS}.MetaDescription`)" :json-ld="jsonLd" />

        <div>
            <WidthBox>
                <Breadcrumbs :items="breadcrumbs" centered />
            </WidthBox>

            <WidthBox>
                <TitleSectionWrapper :title="t(`${NS}.PageTitle`)" :description="t(`${NS}.PageDescription`)" small>
                    <HeroActions href="/services/get-estimate?service=audit" :button-text="t(`${NS}.ButtonText`)" />
                </TitleSectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper :label="t(`${NS}.TriggerName`)" :title="t(`${NS}.TriggerTitles`)">
                    <PainGrid :items="triggers" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox filled="light">
                <SectionWrapper :label="t(`${NS}.ArgumentName`)" :title="t(`${NS}.ArgumentTitles`)">
                    <div class="flex flex-col gap-y-12">
                        <div class="flex flex-col gap-y-6 max-w-[780px]">
                            <p
                                v-for="paragraph in argument"
                                :key="paragraph"
                                class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]"
                            >
                                {{ paragraph }}
                            </p>
                        </div>
                        <StoryQuote :text="t(`${NS}.ArgumentQuote`)" />
                    </div>
                </SectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper
                    :label="t(`${NS}.DeliverableName`)"
                    :title="t(`${NS}.DeliverableTitles`)"
                    :description="t(`${NS}.DeliverableDescription`)"
                >
                    <FeatureGrid :items="deliverables" :columns="2" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox filled="light">
                <SectionWrapper :label="t(`${NS}.AuditStepsName`)" :title="t(`${NS}.AuditStepsTitles`)">
                    <NumberedSteps :items="auditSteps" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper :label="t(`${NS}.ProofName`)" :title="t(`${NS}.ProofTitles`)">
                    <FeatureGrid :items="proof" :columns="2" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox v-if="whyUs.length" filled="light">
                <SectionWrapper :label="t('Views.ServicesOutsource.WhyUsName')" :title="t('Views.ServicesOutsource.WhyUsTitles')">
                    <WhyUs :items="whyUs" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox v-if="faq.length">
                <SectionWrapper :label="t(`${NS}.FaqName`)" :title="t(`${NS}.FaqTitles`)">
                    <FaqList :items="faq" />
                </SectionWrapper>
            </WidthBox>

            <EstimateCta
                :label="t(`${NS}.CtaName`)"
                :title="t(`${NS}.CtaTitles`)"
                :text="t(`${NS}.CtaText`)"
                :button-text="t(`${NS}.ButtonText`)"
                href="/services/get-estimate?service=audit"
                question
            />
        </div>
    </AppLayout>
</template>
