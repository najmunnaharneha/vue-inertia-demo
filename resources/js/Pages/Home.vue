<script setup>
import Layout from "../Layouts/Layout.vue";

defineOptions({
    layout: Layout,
});
</script>

<template>
    <Head :title="`| ${$page.component}`" />
    <h1 class="text-3xl font-bold underline text-red-400">
        {{ $page.props.auth.user }}
    </h1>
</template>
