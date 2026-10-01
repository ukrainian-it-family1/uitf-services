import { createApp, h } from 'vue';
import './app.css';
import { pageState, withBase, withoutBase } from './inertia-stub';
import en from './data/en.json';
import uk from './data/uk.json';
import OperationsPlatforms from '@/pages/Services/OperationsPlatforms.vue';
import RegulatedProducts from '@/pages/Services/RegulatedProducts.vue';
import RescueAndRestart from '@/pages/Services/RescueAndRestart.vue';
import GetEstimate from '@/pages/Services/GetEstimate.vue';
import ServicesIndex from './site-pages/ServicesIndex.vue';
import ProductDevelopment from './site-pages/ProductDevelopment.vue';
import Overview from './site-pages/Overview.vue';

// The whole Services section, routed by real paths: /{locale}/services/...
const LIVE_SITE = 'https://ukrainian-it.family';
const path0 = withoutBase(location.pathname);
const match = path0.match(/^\/(en|uk)(\/.*)?$/);

function setProps(locale: 'en' | 'uk', data: any) {
    pageState.url = `${location.pathname}${location.search}`;
    pageState.props = {
        locale,
        translations: { locale, messages: data.messages },
        navigation: data.navigation,
        seoContext: { canonical: '', alternates: {}, siteName: 'Ukrainian IT Family', siteUrl: '/', defaultImage: '' },
    };
    document.documentElement.lang = locale;
}

if (path0 === '/' || path0 === '/index.html') {
    setProps('uk', uk);
    createApp({ render: () => h(Overview) }).mount('#app');
} else if (!match) {
    location.replace(withBase('/'));
} else {
    const locale = match[1] as 'en' | 'uk';
    const path = (match[2] ?? '/').replace(/\/$/, '') || '/';
    const data: any = locale === 'uk' ? uk : en;

    const routes: Record<string, { component: any; props: Record<string, unknown> }> = {
        '/services': {
            component: ServicesIndex,
            props: { services: data.services, expertise: data.expertise, whyUs: data.whyUs },
        },
        '/services/product-development': {
            component: ProductDevelopment,
            props: { outsourceSteps: data.outsourceSteps, whyUs: data.whyUs, expertise: data.expertise, projects: data.productDevelopmentProjects },
        },
        '/services/operations-platforms': {
            component: OperationsPlatforms,
            props: { outsourceSteps: data.outsourceSteps, whyUs: data.whyUs, projects: data.operationsProjects },
        },
        '/services/regulated-products': {
            component: RegulatedProducts,
            props: { outsourceSteps: data.outsourceSteps, whyUs: data.whyUs },
        },
        '/services/rescue-and-restart': { component: RescueAndRestart, props: { whyUs: data.whyUs } },
        '/services/get-estimate': { component: GetEstimate, props: {} },
    };

    const route = routes[path];
    if (!route) {
        // Everything outside the Services section opens on the live site.
        location.replace(`${LIVE_SITE}${path0}${location.search}`);
    } else {
        setProps(locale, data);
        createApp({ render: () => h(route.component, route.props) }).mount('#app');
    }
}
