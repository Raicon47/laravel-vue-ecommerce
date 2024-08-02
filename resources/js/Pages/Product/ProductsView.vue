<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link  } from '@inertiajs/vue3';


</script>


<template>
     <AuthenticatedLayout>
<Head title="Products" />

        <div class="d-flex justify-content-between">
           <span class="fw-bold">Products</span>
           <Link :href="route('create.newproduct')" class="btn btn-success btn-sm">create new</Link>
        </div>

        <div class="py-5">
            <div class="">
                <div class="bg-white">

                    <div class="">You're logged in!</div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

