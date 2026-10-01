<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { useTranslations } from './existing';

export interface Domain {
    title: string;
    text: string;
    caseName: string;
    caseLink?: string | null;
}

defineProps<{
    items: Domain[];
}>();

const { localePath } = useTranslations();
</script>

<template>
    <ul class="flex flex-col border-t border-[#b2d1e1]">
        <li
            v-for="item in items"
            :key="item.title"
            class="grid grid-cols-[minmax(0,4fr)_minmax(0,6fr)_minmax(0,3fr)] gap-x-12 border-b border-[#b2d1e1] py-10 max-[1024px]:grid-cols-1 max-[1024px]:gap-y-4 max-sm:py-8"
        >
            <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                {{ item.title }}
            </h3>
            <p class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e]">
                {{ item.text }}
            </p>
            <div class="flex items-start max-[1024px]:pt-2">
                <Link
                    v-if="item.caseLink"
                    :href="localePath(item.caseLink)"
                    class="group flex items-center gap-x-1 font-[Montserrat] font-semibold text-sm leading-[17px] tracking-[0.08em] uppercase text-[#ffc20f] transition-all duration-500 hover:text-[#b3880b]"
                >
                    <span>{{ item.caseName }}</span>
                    <img src="/static/images/arrow-yellow.svg" alt="" width="16" height="17" />
                </Link>
                <span
                    v-else
                    class="font-[Montserrat] font-semibold text-sm leading-[17px] tracking-[0.08em] uppercase text-[#80b3ce]"
                >
                    {{ item.caseName }}
                </span>
            </div>
        </li>
    </ul>
</template>
