<script setup>
const { title } = defineProps({
    title: {
        default: 'Unknown'
    }
})
</script>
<template>
    <div class="flex flex-col space-y-[8px]">
        <Label>{{ title }}</Label>
        <slot />
    </div>
</template>
