<script setup>
import Sidebar from "@/Components/Admin/Sidebar.vue"
</script>

<template>
    <div class="grid grid-cols-[250px_1fr] h-screen overflow-hidden">
        <Sidebar />
        <div class="overflow-y-scroll">
            <slot />
        </div>
    </div>
</template>