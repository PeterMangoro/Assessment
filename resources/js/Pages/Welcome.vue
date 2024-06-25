<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { PlayCircleIcon } from "@heroicons/vue/24/solid";
import { CheckCircleIcon } from "@heroicons/vue/24/outline";
import SmoothScroll from '@/Components/SmoothScroll.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    landing:{
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
    footer:{
        type: Object,
    }
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
    <div class="text-white/80 bg-blue-700 dark:text-white/50 pb-5">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="">
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-start py-5">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white dark:focus-visible:ring-white">
                        Dashboard
                        </Link>

                        <template v-else>
                            <div class="grid grid-cols-3">
                                <div class="cols-span-1 flex gap-1 my-auto font-extrabold text-xl">
                                    <img class="h-10 w-auto" src="/logo.png" />

                                </div>
                                <div class="cols-span-2">
                                    <smooth-scroll v-for="item in items" key="item.id" :href="item.href"
                                        v-smooth-scroll="{ duration: 10000 }"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white dark:focus-visible:ring-white">
                                        {{ item.title }}
                                    </smooth-scroll>
                                </div>
                            </div>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <!-- Landing -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div class="my-auto">
                            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100">
                                <span class="block xl:inline">{{ landing.title }}</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 dark:text-gray-400">
                                {{landing.detail}}
                            </p>

                            <div class="flex justify-start gap-5 my-auto">
                                <button type="submit"
                                    class="mt-10 flex items-center justify-center rounded-md border border-transparent bg-white text-blue-600 px-8 py-1 text-base uppercase font-bold focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Get Started
                                </button>

                                <button type="submit"
                                    class="mt-10 flex items-center justify-center rounded-md border border-transparent px-8 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    <PlayCircleIcon class="size-10 text-white" />
                                    Watch Intro
                                </button>
                            </div>
                        </div>
                        <div>
                            <img class="w-autServiceso rounded-lg" :src="landing.image.path" />
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Our Story -->
    <div class="text-black bg-slate-50" id="our-story">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div>
                            <img class="w-auto rounded-lg" :src="story.image.path" />
                        </div>
                        <div class="my-auto">
                            <h1 class="uppercase">Our Story</h1>
                            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 pb-5">
                                <span class="block xl:inline">{{story.title}}</span>
                            </h1>

                            <div class="flex justify-start gap-5 bg-slate-200 my-auto h-auto rounded-lg p-2 capitalize">
                                <button type="submit"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-blue-500 text-white px-8 py-1 text-base font-bold focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Who Are We
                                </button>

                                <button type="submit"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-white px-8 py-1 text-base font-bold focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Our Vision
                                </button>

                                <button type="submit"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-white px-8 py-1 text-base font-bold focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Our History
                                </button>
                            </div>

                            <p class="py-5">
                                {{ story.detail }}
                                
                            </p>
                            
                        </div>
                    </div>
                </main>

               
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="text-black bg-white pb-20" id="services">
        <div>
            <div class="m-auto flex justify-center py-20">
                <p class="text-center border-blue-600 rounded-full border-2 py-1 px-5">
                    Services
                </p>
            </div>
            <div>
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-3 max-w-6xl mx-auto">
                    <div v-for="service in services" :key="service.id" class="border p-5 rounded">
                        <img class="rounded-lg w-16" :src="service.image.path" />
                        <p class="py-3 font-bold">{{ service.title }}</p>
                        <p class="text-base text-black/50">
                            {{ service.detail }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing -->

    <div class="text-black bg-gray-100 pb-20" id="pricing">
        <div>
            <div class="m-auto flex justify-center py-20">
                <p class="text-center border-blue-600 rounded-full border-2 py-1 px-5 ">
                    Pricing
                </p>
            </div>
            <div>
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-3 max-w-6xl mx-auto">
                    <div v-for="price in prices" :key="price.id" class=" p-5 rounded-lg bg-slate-50" :class="{
                        [`shadow-2xl bg-white border-2`]: price.highlight == true,
                    }">
                        <div class="m-auto flex justify-center py-5">
                            <p class="text-center border-blue-600 rounded-full border-2 py-1 px-5" :class="{
                        [`bg-blue-600 text-white`]:
                            price.highlight == true,
                    }">
                                {{ price.title }}
                            </p>
                        </div>

                        <div>
                            <p class="text-center">
                                {{ price.detail }}
                            </p>
                        </div>

                        <div>
                            <p class="text-center">
                                <span class="align-top text-slate-600 text-xl">$
                                </span>
                                <span class="font-extrabold text-4xl">{{
                        price.price
                    }}</span>
                                <span class="align-bottom text-slate-600 text-xl">/month</span>
                            </p>
                        </div>

                        <div class="m-auto flex justify-center py-5">
                            <button class="text-center border-blue-600 rounded border-2 py-1 px-5" :class="{
                            [`bg-blue-600 text-white`]:
                                price.highlight == true,
                        }">
                                Start Free Trial
                            </button>
                        </div>

                        <div v-for="point in price.packages" :key="point.id"
                            class="m-auto flex justify-start py-1 text-slate-600">
                            <div class="text-center  py-1 px-5 flex gap-1 ">

                                <CheckCircleIcon class="size-5 " :class="{
                        [`text-blue-600 `]:
                            point.value == true,
                    }" />

                                <p class="my-auto">
                                    {{ point.point.title }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class=" bg-blue-600 p-20 text-white">
        <h1 class="text-center text-4xl font-extrabold max-w-lg mx-auto">
            {{footer.title}}
        </h1>

        <p class="text-center p-5 max-w-lg mx-auto">
            {{ footer.detail }}  </p>

        <div class="m-auto flex justify-center ">
            <button class="text-center border-white  rounded border-2 py-1 px-5">
                Get Started
            </button>
        </div>
    </div>
</template>
