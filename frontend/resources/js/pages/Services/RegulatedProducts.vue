<script setup lang="ts">
import { computed } from 'vue';
import {
    AppLayout,
    Breadcrumbs,
    SectionWrapper,
    SeoHead,
    ServiceProcess,
    TitleSectionWrapper,
    WhyUs,
    WidthBox,
    useTranslations,
} from '@/components/services/existing';
import { useContent, type Fact, type FaqItem, type TitledItem } from '@/components/services/useContent';
import HeroActions from '@/components/services/HeroActions.vue';
import PainGrid from '@/components/services/PainGrid.vue';
import DomainList, { type Domain } from '@/components/services/DomainList.vue';
import FeatureGrid from '@/components/services/FeatureGrid.vue';
import CaseHighlight from '@/components/services/CaseHighlight.vue';
import FitBlock from '@/components/services/FitBlock.vue';
import FaqList from '@/components/services/FaqList.vue';
import EstimateCta from '@/components/services/EstimateCta.vue';
import { faqJsonLd } from '@/components/services/faqJsonLd';

const props = defineProps<{
    outsourceSteps?: unknown[];
    whyUs?: unknown[];
}>();

const NS = 'Views.ServicesRegulated';
const { t } = useTranslations();

const breadcrumbs = computed(() => [
    { text: t(`${NS}.Breadcrumbs[0]`), href: '/' },
    { text: t(`${NS}.Breadcrumbs[1]`), href: '/services' },
    { text: t(`${NS}.Breadcrumbs[2]`) },
]);

const problems = useContent<TitledItem[]>(`${NS}.ProblemItems`, []);
const domains = useContent<Domain[]>(`${NS}.DomainItems`, []);
const principles = useContent<TitledItem[]>(`${NS}.PrincipleItems`, []);
const caseTags = useContent<string[]>(`${NS}.CaseTags`, []);
const caseParagraphs = useContent<string[]>(`${NS}.CaseParagraphs`, []);
const caseFacts = useContent<Fact[]>(`${NS}.CaseFacts`, []);
const fitYes = useContent<string[]>(`${NS}.FitYesItems`, []);
const fitNo = useContent<string[]>(`${NS}.FitNoItems`, []);
const faq = useContent<FaqItem[]>(`${NS}.FaqItems`, []);

const steps = computed(() => props.outsourceSteps ?? []);
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
                    <HeroActions
                        href="/services/get-estimate?service=regulated"
                        :button-text="t(`${NS}.ButtonText`)"
                        :caption="t(`${NS}.ButtonCaption`)"
                    />
                </TitleSectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper :label="t(`${NS}.ProblemName`)" :title="t(`${NS}.ProblemTitles`)">
                    <PainGrid :items="problems" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox filled="light">
                <SectionWrapper
                    :label="t(`${NS}.DomainName`)"
                    :title="t(`${NS}.DomainTitles`)"
                    :description="t(`${NS}.DomainDescription`)"
                >
                    <DomainList :items="domains" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper :label="t(`${NS}.PrincipleName`)" :title="t(`${NS}.PrincipleTitles`)">
                    <FeatureGrid :items="principles" :columns="2" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox filled="light">
                <SectionWrapper :label="t(`${NS}.CaseName`)" :title="t(`${NS}.CaseTitles`)">
                    <CaseHighlight
                        :tags="caseTags"
                        :paragraphs="caseParagraphs"
                        :facts="caseFacts"
                        :link-text="t(`${NS}.CaseLinkText`)"
                        link="/portfolio/offenderwise"
                    />
                </SectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper :label="t(`${NS}.FitName`)" :title="t(`${NS}.FitTitles`)" question>
                    <FitBlock
                        :yes-title="t(`${NS}.FitYesTitle`)"
                        :yes-items="fitYes"
                        :no-title="t(`${NS}.FitNoTitle`)"
                        :no-items="fitNo"
                    />
                </SectionWrapper>
            </WidthBox>

            <WidthBox v-if="steps.length" filled="light">
                <SectionWrapper
                    :label="t('Views.ServicesOutsource.ServiceProcessName')"
                    :title="t('Views.ServicesOutsource.ServiceProcessTitles')"
                >
                    <ServiceProcess :steps="steps" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox v-if="whyUs.length">
                <SectionWrapper :label="t('Views.ServicesOutsource.WhyUsName')" :title="t('Views.ServicesOutsource.WhyUsTitles')">
                    <WhyUs :items="whyUs" />
                </SectionWrapper>
            </WidthBox>

            <WidthBox v-if="faq.length" filled="light">
                <SectionWrapper :label="t(`${NS}.FaqName`)" :title="t(`${NS}.FaqTitles`)">
                    <FaqList :items="faq" />
                </SectionWrapper>
            </WidthBox>

            <EstimateCta
                :label="t(`${NS}.CtaName`)"
                :title="t(`${NS}.CtaTitles`)"
                :text="t(`${NS}.CtaText`)"
                :button-text="t(`${NS}.ButtonText`)"
                href="/services/get-estimate?service=regulated"
                :filled="null"
            />
        </div>
    </AppLayout>
</template>
