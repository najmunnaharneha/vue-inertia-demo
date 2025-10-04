<template>
    <Head>
        <title>| About</title>
        <meta
            head-key="description"
            name="description"
            content="This is the about page"
        />
    </Head>
    <div>
        <h1>About page {{ user }}</h1>
    </div>
</template>

<script setup>
defineProps({
    user: String,
});
</script>
