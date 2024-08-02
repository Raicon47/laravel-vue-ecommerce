<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>


<template>
     <AuthenticatedLayout>
<Head title="Products" />

        <div class="d-flex justify-content-between">
          <h2>Create new product</h2>
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

