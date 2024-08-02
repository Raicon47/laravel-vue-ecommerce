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

        <div class="row my-5">
            <div class="col-md-4 my-2" v-for="product in $page.props.auth.user.products" :key="product.id">
            <div class="card" style="width: auto;">
                <div class="card-body">
                  <h5 class="card-title">{{ product.name }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ product.quantity }}</h6>
                  <p class="card-text">{{ product.description }}</p>
                  <a href="#" class="card-link btn btn-warning btn-sm">add to cart</a>
                  <a href="#" class="card-link btn btn-danger btn-sm">delete</a>
                </div>
              </div>
        </div>
        </div>

        <div class="mt-5 text-center">
            <div class="">
                <div class="bg-white">

                    <div class="">You're logged in!</div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

