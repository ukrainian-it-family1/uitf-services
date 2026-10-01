<script setup lang="ts">
import { watchEffect } from 'vue';
const props = defineProps<{ title: string; description?: string | null; image?: string | null; jsonLd?: unknown }>();
watchEffect(() => {
    document.title = props.title;
    let tag = document.getElementById('json-ld');
    if (props.jsonLd) {
        if (!tag) { tag = document.createElement('script'); tag.id = 'json-ld'; (tag as HTMLScriptElement).type = 'application/ld+json'; document.head.appendChild(tag); }
        tag.textContent = JSON.stringify(props.jsonLd);
    } else tag?.remove();
});
</script>
<template><span hidden /></template>
