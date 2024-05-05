<script setup>
import Navigation from '@/Components/Navigation.vue'
import { Modal } from 'momentum-modal'


</script>

<template>
    <div>

        <navigation />
        <div>
            <slot />

        </div>
        <Modal />

    </div>
</template>
