<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
   
   <div class="bg-warning">
    <ul class="nav">
  <li class="nav-item">
    <Link :href="route('dashboard')" class="nav-link">
       <ApplicationLogo class=""/>
    </Link>
  </li>
  <li class="nav-item">
    <Link class="nav-link text-dark" :href="route('dashboard')" :active="route().current('dashboard')">Dashboard</Link>
  </li>
  <li class="nav-item">
    <Link class="nav-link text-dark" :href="route('profile.edit')" :active="route().current('profile.edit')">Profile</Link>
  </li>
  <li class="nav-item">
    <Link class="btn btn-danger mt-1" :href="route('logout')" method="post" as="button">Logout</Link>
  </li>
</ul>
   </div>

    <div>
        <div class="container col-md-8 mx-auto my-5">
           

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
