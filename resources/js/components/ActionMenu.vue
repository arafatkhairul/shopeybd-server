<script setup lang="ts">
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu'
import { Ellipsis } from 'lucide-vue-next';

</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger>
            <Ellipsis class="cursor-pointer" />
        </DropdownMenuTrigger>
        <DropdownMenuContent>
            <DropdownMenuLabel>Action</DropdownMenuLabel>
            <DropdownMenuSeparator />
            <slot />
        </DropdownMenuContent>
    </DropdownMenu>
</template>
