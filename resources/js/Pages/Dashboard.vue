<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import UpdateLanding from '@/Pages/Dashboard/UpdateLanding.vue';
import UpdateStory from '@/Pages/Dashboard/UpdateStory.vue';
import UpdateService from '@/Pages/Dashboard/UpdateService.vue';
import UpdatePricing from '@/Pages/Dashboard/UpdatePricing.vue';
import UpdateFooter from '@/Pages/Dashboard/UpdateFooter.vue';
import SectionBorder from '@/Components/SectionBorder.vue';

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
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <UpdateLanding :landing="landing" />
                </div>
                <SectionBorder />
                <div>
                    <UpdateStory :story="story" />
                </div>
                <SectionBorder />
                <h1 class="text-center font-semibold text-lg dark:text-white pb-5" id="services"> Service Section</h1>
                <div class=" grid grid-cols-1 sm:grid-cols-2 gap-5 ">
                    <UpdateService v-for="service in services" :key="service.id" :service="service"
                        class="col-span-1" />
                </div>

                <SectionBorder />
                <h1 class="text-center font-semibold text-lg dark:text-white pb-5" id="pricing"> Pricing Section</h1>
                <div class=" grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <UpdatePricing v-for="price in prices" :key="price.id" :price="price" class="col-span-1" />
                </div>

                <SectionBorder />
                <div>
                    <UpdateFooter :footer="footer" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
