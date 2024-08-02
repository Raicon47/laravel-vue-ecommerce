<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="container card my-5 p-5 col-md-8 mx-auto">
        <div>
            <Link href="/" class="text-decoration-none">
                <ApplicationLogo class="" />
            </Link>
        </div>

        <div
            class=""
        >
        <div class="">
            <slot />
        </div>
        </div>
    </div>
</template>
