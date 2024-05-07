<script setup>
import Modal from '@/Components/Modal.vue'
import { useForm, Head, Link } from '@inertiajs/vue3'
const form = useForm({
    password: null,
})
</script>

<template>
    <div>
    <Modal class="bg-white max-w-md p-12">
        <h2 class="text-center text-2xl font-bold font-mono text-gray-900">Enable two factor authentication password</h2>

    </Modal>

    <Head title="Enable two factor authentication" />
</div>
</template>
