<template>
    <div>
        <header>
            <nav>
                <!-- <h1>{{ $page.props.auth.user }}</h1> -->
                <div class="space-x-6">
                    <Link
                        class="nav-link"
                        :class="{ 'bg-slate-700': $page.component === 'Home' }"
                        :href="route('home')"
                        >Home
                    </Link>
                </div>
                <div v-if="$page.props.auth.user" class="space-x-6 flex">
                    <img
                        class="avatar"
                        :src="
                            $page.props.auth.user.avatar
                                ? 'storage/' + $page.props.auth.user.avatar
                                : 'storage/avatars/default.jpg'
                        "
                        alt=""
                    />
                    <Link
                        class="nav-link"
                        :class="{
                            'bg-slate-700': $page.component === 'Dashboard',
                        }"
                        :href="route('dashboard')"
                    >
                        Dashboard
                    </Link>

                    <Link
                        class="nav-link"
                        :href="route('logout')"
                        method="post"
                        as="button"
                        >Logout</Link
                    >
                </div>
                <div v-else class="space-x-6">
                    <Link
                        class="nav-link"
                        :class="{
                            'bg-slate-700': $page.component === 'Auth/Register',
                        }"
                        :href="route('register')"
                        >Register</Link
                    >
                    <Link
                        class="nav-link"
                        :class="{
                            'bg-slate-700': $page.component === 'Auth/Login',
                        }"
                        :href="route('login')"
                    >
                        Login
                    </Link>
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup></script>
