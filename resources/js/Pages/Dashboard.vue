<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="" style="color: #8c52ff;">Dashboard</h2>

            <p class="fst-italic">Welcome, {{ $page.props.auth.user.name }}</p>
            <div class="card shadow-sm" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Balance</h5>
    <h6 class="card-subtitle my-2 text-body-secondary">${{ Number($page.props.auth.user.wallet.balance).toLocaleString('en-US') }}</h6>
    <Link class="btn text-light btn-sm mx-1" :href="route('deposit.view')" style="background: #8c52ff;">deposit</Link>
    <Link class="btn  btn-sm mx-1" :href="route('withdraw.view')" style="background: #ede695;">withdraw</Link>
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
