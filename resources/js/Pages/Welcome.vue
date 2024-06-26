<script setup>
import { Head, Link } from "@inertiajs/vue3";
import SmoothScroll from "@/Components/SmoothScroll.vue";
import Landing from "@/Components/Landing.vue";
import Story from "@/Components/Story.vue";
import Services from "@/Components/Services.vue";
import Prices from "@/Components/Prices.vue";
import Footer from "@/Components/Footer.vue";
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
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

const items = [
    {
        id: 1,
        title: "Home",
        href: "/",
    },
    {
        id: 2,
        title: "Services",
        href: "#services",
    },
    {
        id: 3,
        title: "Pricing",
        href: "#pricing",
    },
];
</script>

<template>

    <Head title="Welcome" />
    <div class="text-white/50 bg-blue-700  ">
        <div class="relative min-h-screen flex flex-col items-center  selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="">
                    <nav class="-mx-3 flex flex-1 justify-start py-5">
                        <div class="grid grid-cols-3">
                            <div class="cols-span-1 flex gap-1 my-auto font-extrabold text-xl">
                                <Link :href="route('login') ">
                                <img class="h-10 w-auto" src="/logo.png" />

                                </Link>
                            </div>
                            <div class="cols-span-2">
                                <smooth-scroll v-for="item in items" key="item.id" :href="item.href"
                                    v-smooth-scroll="{ duration: 10000 }"
                                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-white/80 hover:text-white dark:focus-visible:ring-white">
                                    {{ item.title }}
                                </smooth-scroll>
                                
                            </div>
                        </div>
                    </nav>

                </header>

                <main class="mt-6">
                    <!-- Landing -->
                    <Landing :landing="landing" />
                </main>
            </div>
        </div>
    </div>

    <Story :story="story" />
    <Services :services="services" />
    <Prices :prices="prices" />
    <Footer :footer="footer" />
</template>
