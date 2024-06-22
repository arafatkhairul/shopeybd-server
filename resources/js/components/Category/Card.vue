<script setup>
import { asset } from '@/utils/Helper';

const { category } = defineProps(['category']);
</script>
<template>
    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

        <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            <img class="w-10 h-10 rounded-full" :src="asset(`category/${category.icon}`)" alt="Jese image">
            <div class="ps-3">
                <div class="text-base font-semibold">{{ category.name }}</div>
                <div class="font-normal text-gray-500">*</div>
            </div>
        </th>
        <td class="px-6 py-4">
            <div class="flex items-center">
                <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
            </div>
        </td>
        <td class="px-6 py-4">
            <action-menu>
                <action-menu-item>
                    Edit
                </action-menu-item>
                <action-menu-item>
                    Delete
                </action-menu-item>
            </action-menu>
        </td>
    </tr>
</template>
