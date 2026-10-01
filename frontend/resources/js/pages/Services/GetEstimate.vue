<script setup lang="ts">
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import {
    AppLayout,
    Breadcrumbs,
    ContactUsForm,
    SeoHead,
    TitleSectionWrapper,
    WidthBox,
    useTranslations,
} from '@/components/services/existing';
import { useContent, type TitledItem } from '@/components/services/useContent';
import NumberedSteps from '@/components/services/NumberedSteps.vue';

const NS = 'Views.ServicesEstimate';
const SERVICES = ['operations', 'regulated', 'audit'] as const;

const { t } = useTranslations();
const page = usePage();

const breadcrumbs = computed(() => [
    { text: t(`${NS}.Breadcrumbs[0]`), href: '/' },
    { text: t(`${NS}.Breadcrumbs[1]`), href: '/services' },
    { text: t(`${NS}.Breadcrumbs[2]`) },
]);

const nextSteps = useContent<TitledItem[]>(`${NS}.NextSteps`, []);

// The CTA on each service page links here with ?service=…; the value only names the
// form for analytics (the /api/form payload already carries the page path).
const service = computed(() => {
    const query = page.url.split('?')[1] ?? '';
    const value = new URLSearchParams(query).get('service');
    return SERVICES.find((item) => item === value) ?? 'general';
});
const analyticsFormName = computed(() => `services_estimate_${service.value}`);
</script>

<template>
    <AppLayout>
        <SeoHead :title="t(`${NS}.HeadTitle`)" :description="t(`${NS}.MetaDescription`)" />

        <div>
            <WidthBox>
                <Breadcrumbs :items="breadcrumbs" centered />
            </WidthBox>

            <WidthBox>
                <TitleSectionWrapper :title="t(`${NS}.PageTitle`)" :description="t(`${NS}.PageDescription`)" small />
            </WidthBox>

            <WidthBox filled="light">
                <div
                    class="grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] items-start gap-x-16 px-16 py-[120px] max-[1024px]:grid-cols-1 max-[1024px]:gap-y-16 max-sm:px-3 max-sm:py-12"
                >
                    <div class="flex flex-col gap-y-10">
                        <h2 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                            {{ t(`${NS}.NextTitle`) }}<span class="text-[#ffc20f]">.</span>
                        </h2>
                        <NumberedSteps :items="nextSteps" vertical />
                        <p class="font-[Montserrat] font-medium text-sm leading-[170%] tracking-[0.04em] text-[#80b3ce]">
                            {{ t(`${NS}.NextNote`) }}
                        </p>
                    </div>

                    <ContactUsForm
                        :analytics-form-name="analyticsFormName"
                        description-field
                        :file-label="t(`${NS}.FormFileLabel`)"
                        :form-label="t(`${NS}.FormLabel`)"
                        :form-description="t(`${NS}.FormDescription`)"
                    />
                </div>
            </WidthBox>
        </div>
    </AppLayout>
</template>
