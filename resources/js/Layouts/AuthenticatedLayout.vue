<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>

<div class="fixed-top">
    <ul class="nav d-flex justify-content-around">
  <li class="nav-item">
    <Link :href="route('dashboard')" class="nav-link mt-2">
       <ApplicationLogo class=""/>
    </Link>
  </li>
</ul>
   </div>

   <div class=" fixed-bottom shadow p-2" style="background:  #ede695;">
    <ul class="nav d-flex justify-content-around">
  <li class="nav-item">
    <Link class="nav-link fw-medium" :href="route('dashboard')" :active="route().current('dashboard')" style="color: #8c52ff;">Dashboard</Link>
  </li>
  <li class="nav-item">
    <Link class="nav-link fw-medium" :href="route('profile.edit')" :active="route().current('profile.edit')" style="color: #8c52ff;">Profile</Link>
  </li>
  <li class="nav-item">
    <Link class="nav-link fw-medium" :href="route('products')" :active="route().current('profile.edit')" style="color: #8c52ff;">Products</Link>
  </li>
  <li class="nav-item">
    <Link class="btn btn-danger mt-1" :href="route('logout')" method="post" as="button">Logout</Link>
  </li>
</ul>
   </div>

    <div>
        <div class="container col-md-8 mx-auto" style="margin-top: 7rem; margin-bottom: 10rem;">


            <!-- Page Heading -->
            <header class="" v-if="$slots.header">
                <div class="">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main class="">
                <slot />
            </main>
        </div>
    </div>
</template>
