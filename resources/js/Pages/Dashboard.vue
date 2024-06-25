<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import UpdateLanding from '@/Pages/Dashboard/UpdateLanding.vue';

defineProps({
   
    landing: {
        type: Object,
    },
    story: {
        type: Object,
    },
    services: {
        type: Array,
    },
    prices: {
        type: Array,
    },
    footer: {
        type: Object,
    },
});
</script>

<template>
    <AppLayout title="Dashboard">
        

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg ">
                   <UpdateLanding :landing="landing" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
