<template>
    <div>
        <header class="bg-neutral-600 text-white">
            <nav
                class="flex items-center justify-between p-4 max-w-screen-lg mx-auto"
            >
                <h1>{{ $page.props.auth.user }}</h1>
                <div class="space-x-6">
                    <Link href="/">Home</Link>
                    <Link href="/about">About</Link>
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup></script>
