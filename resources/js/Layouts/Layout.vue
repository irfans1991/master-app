<script setup>
import {Link} from '@inertiajs/vue3';
</script>


<template>

    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex  p-4 max-w-screen-lg max-auto">
                <h1>{{ $page.props.app.name }}</h1>
                <div class="flex space-x-6 items-center justify-between">
                    <Link href="/">Home</Link>
                    <Link href="/about">About</Link>
                    <Link href="/about">About</Link>
                    <Link href="/about">About</Link>
                    <Link href="/about">About</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>~