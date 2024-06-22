<script setup>
import SidebarArea from '@/components/Sidebar/SidebarArea.vue';
import HeaderArea from '@/components/Header/HeaderArea.vue';
import { Head } from '@inertiajs/vue3'

const { title } = defineProps({
    title: {
        default: 'Unknown'
    }
})
</script>
<template>

    <Head :title="title" />
    <div class="flex h-screen  bg-slate-100 overflow-hidden">
        <SidebarArea />
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <HeaderArea />
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-6">
                    <transition name="page" mode="in-out" appear>
                        <slot />
                    </transition>
                </div>
            </main>
        </div>
    </div>
</template>

<style>
.page-enter-active,
.page-leave-active {
    transition: all 0.5s;
}

.page-enter-from,
.page-leave-to {
    opacity: 0;
    filter: blur(5px);
}
</style>
