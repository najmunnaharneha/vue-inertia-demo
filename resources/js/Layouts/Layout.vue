<template>
    <div>
        <header>
            <nav>
                <h1>{{ $page.props.auth.user }}</h1>
                <div class="space-x-6">
                    <Link class="nav-link" :href="route('home')">Home</Link>
                </div>
                <div class="space-x-6">
                    <Link class="nav-link" :href="route('register')"
                        >Register</Link
                    >
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup></script>
