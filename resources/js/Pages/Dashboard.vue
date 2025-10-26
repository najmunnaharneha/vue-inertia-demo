<template>
    <div>
        <P class="mt-4 p-4 bg-green-200">{{ $page.props.flash.greet }}</P>
        <h1 class="title">Welcome back {{ $page.props.auth.user.name }}</h1>
    </div>
</template>
