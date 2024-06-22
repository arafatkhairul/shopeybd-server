<template>
    <div class="flex items-center justify-between mb-4">
        <slot name="inner" />
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-slate-500">
            <tr>
                <slot name="head" />
            </tr>
        </thead>
        <tbody>
            <slot name="body" />
        </tbody>
    </table>
</template>
