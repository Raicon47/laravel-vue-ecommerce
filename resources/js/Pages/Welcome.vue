<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />

    <nav v-if="canLogin" class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="nav text-decoration-none text-danger fw-bold" href="#">Apunto Sugar</a>
    <div class=" navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
      </ul>
      <form  class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="btn btn-danger mx-2">
            Dashboard
        </Link>
        <Link v-if="canLogin" :href="route('login')" class="btn btn-warning mx-1">
            Login
        </Link>
        <Link  v-if="canRegister" :href="route('register')" class="btn btn-outline-danger mx-1">
            Register
        </Link>
      </form>
    </div>
  </div>
</nav>

            <div class="bg-warning p-2">
               get 20% discount from now till December
            </div>
            
            <div class="container my-5">
                   <div class="row">

                    <div class="col-md-4">
                        <div class="card" style="width: auto;">
                            <div class="card-body">
                                <h5 class="card-title">Card Header</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, ipsum sed! Neque, consequuntur enim. Necessitatibus magni libero mollitia officia obcaecati?
                                </p>
                                <Link :href="route('dashboard')" class="btn btn-warning mx-2">
                                       Add to cart
                                   </Link>
                            </div>

                        </div>
                    </div>

                   </div>
            </div>

</template>
