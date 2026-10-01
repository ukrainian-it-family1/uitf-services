<script setup lang="ts">
defineProps<{
    yesTitle: string;
    yesItems: string[];
    noTitle: string;
    noItems: string[];
}>();
</script>

<template>
    <div class="grid grid-cols-[3fr_2fr] gap-3 max-[1024px]:grid-cols-1">
        <div class="flex flex-col gap-y-6 bg-[#f2f7fa] p-10 max-sm:p-6">
            <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                {{ yesTitle }}
            </h3>
            <ul class="flex flex-col gap-y-4 pl-6">
                <li
                    v-for="item in yesItems"
                    :key="item"
                    class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e] before:inline-block before:w-[1em] before:-ml-[1em] before:font-bold before:text-[#ffc20f] before:content-['•']"
                >
                    {{ item }}
                </li>
            </ul>
        </div>

        <div class="flex flex-col gap-y-6 bg-[#fffcf3] p-10 max-sm:p-6">
            <h3 class="font-[Montserrat] font-semibold text-2xl leading-[29px] text-[#01669c]">
                {{ noTitle }}
            </h3>
            <ul class="flex flex-col gap-y-4 pl-6">
                <li
                    v-for="item in noItems"
                    :key="item"
                    class="font-[Montserrat] font-normal text-base leading-[150%] tracking-[0.04em] text-[#01486e] before:inline-block before:w-[1em] before:-ml-[1em] before:font-bold before:text-[#80b3ce] before:content-['•']"
                >
                    {{ item }}
                </li>
            </ul>
        </div>
    </div>
</template>
