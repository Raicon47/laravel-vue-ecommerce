<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    status: {
        type: String
    }
})

const form = useForm({
    name: '',
    price: '',
    quantity: '',
    description: '',
    image: '',
})

const submit = () => {
   form.post(route('create'))
}
</script>


<template>
     <AuthenticatedLayout>
<Head title="Create new product" />

        <div class="mx-auto col-md-6">
          <h2>Create new product</h2>

          <form @submit.prevent="submit">

            <div class="my-3">
                <InputLabel for="name" value="Product Name" />
                <TextInput
                    id="name"
                    type="text"
                    class="form-control mt-1"
                    v-model="form.name"
                    autofocus
                    autocomplete="name"
                />
                <InputError class="text-danger" :message="form.errors.name" />
            </div>

            <div class="my-3">
                <InputLabel for="price" value="Product Price" />
                <TextInput
                    id="price"
                    type="text"
                    class="form-control mt-1"
                    v-model="form.price"
                    autofocus
                    autocomplete="price"
                />
                <InputError class="text-danger" :message="form.errors.price" />
            </div>


            <div class="my-3">
                <InputLabel for="quantity" value="Product Quantity" />
                <TextInput
                    id="quantity"
                    type="number"
                    class="form-control mt-1"
                    v-model="form.quantity"
                    autofocus
                    autocomplete="quantity"
                />
                <InputError class="text-danger" :message="form.errors.quantity" />
            </div>

            <div class="my-3">
                <InputLabel for="description" value="Product Description" />
                <TextInput
                    id="description"
                    type="text"
                    class="form-control mt-1"
                    v-model="form.description"
                    autofocus
                    autocomplete="description"
                />
                <InputError class="text-danger" :message="form.errors.description" />
            </div>

            <div class="my-3">
                <InputLabel for="image" value="Product Image" />
                <TextInput
                    id="image"
                    type="file"
                    class="form-control mt-1"
                    v-model="form.image"
                    autofocus
                />
                <InputError class="text-danger" :message="form.errors.image" />
            </div>

            <PrimaryButton class="btn btn-success" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    create
            </PrimaryButton>

          </form>


          <div class="py-5">
            <div class="">
                <div class="bg-white">

                    <div class="">You're logged in!</div>
                </div>
            </div>
        </div>
        </div>



    </AuthenticatedLayout>
</template>

