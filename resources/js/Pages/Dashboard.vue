<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="">Dashboard</h2>

            <p>Welcome, {{ $page.props.auth.user.name }}</p>
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Balance</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">${{ $page.props.auth.user.balance }}</h6>
    <Link class="btn btn-success btn-sm" :href="route('deposit.view')">deposit</Link>
  </div>
</div>
                    </template>

        <div class="py-5">
            <div class="">
                <div class="bg-white">
                   
                    <div class="">You're logged in!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
