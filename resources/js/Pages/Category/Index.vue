<script setup>
import { usePage } from '@inertiajs/vue3';
import Card from '@/components/Category/Card.vue';
const { categories } = usePage().props;
</script>
<template>
    <AppLayout title="Category">
        <Box>
            <Table>
                <template #inner>
                    <div></div>
                    <Link :href="route('category.create')">
                    <Button size="sm" class="rounded-lg">Add New</Button>
                    </Link>
                </template>
                <template #head>
                    <th scope="col" class="px-6 py-3 !font-[500]">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 !font-[500]">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 !font-[500]">
                        Action
                    </th>
                </template>
                <template #body>
                    <Card v-for="category in categories" :category="category" :key="category.id" />
                </template>
            </Table>
        </Box>
    </AppLayout>
</template>
