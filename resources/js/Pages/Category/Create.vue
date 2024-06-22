<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    icon: null
})

function submit() {
    form.post(route('category.store'))
}

</script>
<template>
    <AppLayout title="Category create">
        <Box class="max-w-[40%]">
            <form @submit.prevent="submit" class="space-y-4">
                <form-item title="Name">
                    <Input v-model="form.name" type="text" placeholder="Enter Category name" />
                </form-item>
                <form-item title="Icon">
                    <Input @input="form.icon = $event.target.files[0]" type="file" />
                </form-item>
                <Button type="submit" size="sm">Submit</Button>
            </form>
        </Box>
    </AppLayout>
</template>
