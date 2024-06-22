<script setup>
import { usePage } from '@inertiajs/vue3';

const form = usePage().props;

function submit() {

}
</script>
<template>
    <AppLayout title="Product create">
        <Box>
            <form @submit.prevent="submit" class="space-y-4">
                <form-item title="Name">
                    <Input v-model="form.name" type="text" placeholder="Enter product name" />
                </form-item>
                <form-item title="Icon">
                    <Input @input="form.icon = $event.target.files[0]" type="file" />
                </form-item>
                <Button type="submit" size="sm">Submit</Button>
            </form>
        </Box>
    </AppLayout>
</template>
