// Re-exports of components and composables that already exist in the project.
// The new service pages import them only through this file, so if a path
// differs in the repository it has to be fixed here and nowhere else.
//
// Names and props were taken from the production build (Vite manifest + compiled chunks).

export { default as AppLayout } from '@/layouts/AppLayout.vue';
export { default as SeoHead } from '@/components/SeoHead.vue';
export { default as WidthBox } from '@/components/WidthBox.vue';
export { default as Breadcrumbs } from '@/components/Breadcrumbs.vue';
export { default as TitleSectionWrapper } from '@/components/TitleSectionWrapper.vue';
export { default as SectionWrapper } from '@/components/SectionWrapper.vue';
export { default as MainButton } from '@/components/MainButton.vue';
export { default as ContactUsForm } from '@/components/ContactUsForm.vue';
export { default as WhyUs } from '@/components/WhyUs.vue';
export { default as PortfolioList } from '@/components/PortfolioList.vue';
export { default as ServiceProcess } from '@/components/ServiceProcess.vue';

// The composable that returns { t, locale, localePath } (used by every page on the site).
export { useTranslations } from '@/composables/useTranslations';
