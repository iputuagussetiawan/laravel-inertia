<template>
    <MainLayout>
        <div>
            <h1>Index</h1>
            <Link href="/hello">Show Page</Link>
            <div>The Message Is {{ message }}</div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../../Layouts/MainLayout.vue";
defineProps({
    message: String,
});
</script>
