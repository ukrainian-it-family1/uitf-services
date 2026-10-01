<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
// Start page of the preview: what to review and where (for the client, in Ukrainian).
import AppLayout from '@/layouts/AppLayout.vue';
import SeoHead from '@/components/SeoHead.vue';
import WidthBox from '@/components/WidthBox.vue';
import TitleSectionWrapper from '@/components/TitleSectionWrapper.vue';
import SectionWrapper from '@/components/SectionWrapper.vue';

interface Entry {
    name: string;
    path: string;
    text: string;
}

const newPages: Entry[] = [
    { name: 'Операційні платформи', path: '/services/operations-platforms', text: 'Для сервісних компаній, де гроші проходять через партнерів і кілька ролей. Головний кейс: Andulka.' },
    { name: 'Регульовані продукти', path: '/services/regulated-products', text: 'Для бізнесу з регуляторними вимогами: DAC7, маркування, юридично значущі документи, DVLA. Головний кейс: OffenderWise.' },
    { name: 'Аудит і перезапуск', path: '/services/rescue-and-restart', text: 'Для власників, яким залишився чужий код або пропозиція переписати все з нуля.' },
    { name: 'Форма заявки', path: '/services/get-estimate', text: 'Кінцева сторінка: форма і три кроки, що буде далі. Кнопки трьох сторінок вище ведуть сюди.' },
];

const existingPages: Entry[] = [
    { name: 'Послуги', path: '/services', text: 'Як зараз на сайті. Єдина зміна: картки послуг ведуть на нові сторінки.' },
    { name: 'Розробка продукту', path: '/services/product-development', text: 'Без змін. Показана, щоб було видно розділ цілком.' },
];

const checklist = [
    'Тексти і факти в кейсах: усе взято з портфоліо, нічого не вигадано.',
    'Українська версія: назви послуг і терміни.',
    'Порядок блоків на кожній сторінці.',
    'Шлях клієнта: Послуги → сторінка послуги → форма заявки.',
];

const link = 'inline-flex h-12 items-center justify-center px-6 font-[Montserrat] font-semibold text-sm tracking-[0.08em] uppercase transition-all duration-500';
</script>

<template>
    <AppLayout>
        <SeoHead title="Нові сторінки розділу «Послуги» | Попередній перегляд" />

        <div>
            <WidthBox>
                <div class="pt-16 max-sm:pt-10">
                    <TitleSectionWrapper
                        title="Нові сторінки розділу «Послуги»."
                        description="Попередній перегляд для погодження. Тут чотири нові сторінки і дві наявні, щоб було видно, як розділ працює цілком. Кожна сторінка є українською та англійською."
                        small
                    />
                </div>
            </WidthBox>

            <WidthBox filled="light">
                <SectionWrapper label="Нове" title="Нові сторінки">
                    <ul class="grid grid-cols-2 gap-3 max-[1024px]:grid-cols-1">
                        <li v-for="page in newPages" :key="page.path" class="flex flex-col gap-y-6 bg-white p-10 max-sm:p-6">
                            <div class="flex flex-col gap-y-3">
                                <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">{{ page.name }}</h3>
                                <code class="font-mono text-sm text-[#80b3ce]">{{ page.path }}</code>
                                <p class="font-[Montserrat] text-base leading-[150%] tracking-[0.04em] text-[#01486e]">{{ page.text }}</p>
                            </div>
                            <div class="mt-auto flex gap-x-3">
                                <Link :href="`/uk${page.path}`" :class="[link, 'bg-[#01669c] text-white hover:bg-[#3485b0]']">Українською</Link>
                                <Link :href="`/en${page.path}`" :class="[link, 'border border-[#01669c] text-[#01669c] hover:bg-[rgba(1,102,156,0.1)]']">English</Link>
                            </div>
                        </li>
                    </ul>
                </SectionWrapper>
            </WidthBox>

            <WidthBox>
                <SectionWrapper label="Для контексту" title="Наявні сторінки">
                    <ul class="grid grid-cols-2 gap-3 max-[1024px]:grid-cols-1">
                        <li v-for="page in existingPages" :key="page.path" class="flex flex-col gap-y-6 bg-[#f2f7fa] p-10 max-sm:p-6">
                            <div class="flex flex-col gap-y-3">
                                <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">{{ page.name }}</h3>
                                <code class="font-mono text-sm text-[#80b3ce]">{{ page.path }}</code>
                                <p class="font-[Montserrat] text-base leading-[150%] tracking-[0.04em] text-[#01486e]">{{ page.text }}</p>
                            </div>
                            <div class="mt-auto flex gap-x-3">
                                <Link :href="`/uk${page.path}`" :class="[link, 'bg-[#01669c] text-white hover:bg-[#3485b0]']">Українською</Link>
                                <Link :href="`/en${page.path}`" :class="[link, 'border border-[#01669c] text-[#01669c] hover:bg-[rgba(1,102,156,0.1)]']">English</Link>
                            </div>
                        </li>
                    </ul>
                </SectionWrapper>
            </WidthBox>

            <WidthBox filled="light">
                <SectionWrapper label="Погодження" title="Що перевірити">
                    <ul class="flex max-w-[780px] flex-col gap-y-4 pl-6">
                        <li
                            v-for="item in checklist"
                            :key="item"
                            class="font-[Montserrat] text-base leading-[150%] tracking-[0.04em] text-[#01486e] before:-ml-[1em] before:inline-block before:w-[1em] before:font-bold before:text-[#ffc20f] before:content-['•']"
                        >
                            {{ item }}
                        </li>
                    </ul>
                    <p class="mt-12 max-w-[780px] font-[Montserrat] text-sm leading-[170%] tracking-[0.04em] text-[#80b3ce]">
                        Посилання поза розділом «Послуги» (кейси, блог, про нас) відкриваються на живому сайті. Форма в цьому перегляді нічого не надсилає.
                    </p>
                </SectionWrapper>
            </WidthBox>
        </div>
    </AppLayout>
</template>
