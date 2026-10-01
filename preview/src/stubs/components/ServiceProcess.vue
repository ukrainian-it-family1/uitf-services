<script setup lang="ts">
// Desktop layout of the site's ServiceProcess / ProcessStep (slider variant omitted in the preview).
defineProps<{ steps: { image: string; title: string; content: string[] }[] }>();
const colors = ['#dbeaf1', '#b2d1e1', '#80b3ce', '#01669c', '#ffc20f'];
</script>
<template>
    <div class="flex items-start pr-10 max-[1024px]:flex-col max-[1024px]:gap-y-10 max-[1024px]:pr-0">
        <div v-for="(step, i) in steps" :key="step.title" class="flex w-1/5 flex-col max-[1024px]:w-full">
            <div class="relative flex h-[120px] items-center justify-center" :style="{ background: colors[i % colors.length] }">
                <img :src="step.image" alt="" width="80" height="80" />
            </div>
            <div class="flex flex-col gap-y-2 pt-6 pr-6">
                <div class="font-[Montserrat] text-2xl font-semibold leading-[29px] text-[#01669c]">{{ step.title }}</div>
                <div v-for="text in step.content" :key="text" class="font-[Montserrat] text-sm leading-[170%] tracking-[0.04em] text-[#01669c]">{{ text }}</div>
            </div>
        </div>
    </div>
</template>
