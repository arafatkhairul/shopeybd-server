<script setup lang="ts">
import { useSidebarStore } from '@/stores/sidebar'
import { Link } from '@inertiajs/vue3'
import SidebarDropdown from './SidebarDropdown.vue'

const sidebarStore = useSidebarStore()

const props = defineProps(['item', 'index'])
const currentPage = 'xx'

interface SidebarItem {
    label: string
}

const handleItemClick = () => {
    const pageName = sidebarStore.page === props.item.label ? '' : props.item.label
    sidebarStore.page = pageName

    if (props.item.children) {
        return props.item.children.some((child: SidebarItem) => sidebarStore.selected === child.label)
    }
}
</script>

<template>
    <li>
        <div v-if="item.route == null"
            class="group relative cursor-pointer select-none flex items-center gap-2.5 rounded-lg py-2 px-4 font-medium text-[#DEE4EE] !text-[14.975px] leading-[20.9625px] duration-300 ease-in-out hover:bg-slate-800 dark:hover:bg-meta-4"
            @click.prevent="handleItemClick" :class="{
                'bg-[#333A48] dark:bg-[#313D4A]': sidebarStore.page === item.label
            }">
            <span v-html="item.icon"></span>

            <span class="cursor-pointer">{{ item.label }}</span>

            <svg v-if="item.children" class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': sidebarStore.page === item.label }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                    fill="" />
            </svg>
        </div>
        <Link v-else :href="item.route"
            class="group relative cursor-pointer select-none flex items-center gap-2.5 rounded-lg py-2 px-4 font-medium text-[#DEE4EE] !text-[14.975px] leading-[20.9625px] duration-300 ease-in-out hover:bg-slate-800 dark:hover:bg-meta-4"
            @click.prevent="handleItemClick" :class="{
                'bg-[#333A48] dark:bg-[#313D4A]': sidebarStore.page === item.label
            }">
        <span v-html="item.icon"></span>

        <span class="cursor-pointer">{{ item.label }}</span>

        <svg v-if="item.children" class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
            :class="{ 'rotate-180': sidebarStore.page === item.label }" width="20" height="20" viewBox="0 0 20 20"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                fill="" />
        </svg>
        </Link>

        <!-- Dropdown Menu Start -->
        <div class="translate cursor-pointer transform overflow-hidden" v-show="sidebarStore.page === item.label">
            <SidebarDropdown v-if="item.children" :items="item.children" :currentPage="currentPage"
                :page="item.label" />
            <!-- Dropdown Menu End -->
        </div>
    </li>
</template>
