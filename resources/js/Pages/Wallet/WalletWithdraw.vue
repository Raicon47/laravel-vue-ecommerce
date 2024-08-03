<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import SecondButton from '@/Components/SecondButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    amount: '',
});

const submit = () => {
    form.post(route('withdraw'));
};
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Deposit" />

    <div class="container col-md-4 mx-auto">
        <h4 style="color: #8c52ff;">Withdraw</h4>
        <p class="fst-italic">Hello , {{ $page.props.auth.user.name }}. input withdrawal amount below</p>

        <form @submit.prevent="submit">
            <div class="my-3">
                <InputLabel for="amount" value="Amount" />

                <TextInput
                    id="amount"
                    type="text"
                    class="form-control mt-3"
                    v-model="form.amount"
                    autofocus
                    autocomplete="amount"
                />

                <InputError class="text-danger" :message="form.errors.amount" />
            </div>

            <SecondButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    withdraw
            </SecondButton>

        </form>

       ` <div class="py-5">
            <div class="">
                <div class="bg-white">

                    <div class="">You're logged in!</div>
                </div>
            </div>
        </div>`

    </div>


  </AuthenticatedLayout>
</template>
