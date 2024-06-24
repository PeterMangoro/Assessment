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

const services = [
    {
        id: 1,
        icon: "/pill.png",
        title: "Refreshing Design",
        detail: "Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna",
    },
    {
        id: 2,
        icon: "/bootstrap.png",
        title: "Solid Bootstrap 5",
        detail: "Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna",
    },

    {
        id: 3,
        icon: "/components.png",
        title: "100+ Components",
        detail: "Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna",
    },

    {
        id: 4,
        icon: "/speed.png",
        title: "Speed Optimized",
        detail: "Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna",
    },
    {
        id: 5,
        icon: "/customizable.png",
        title: "Fully Customizable",
        detail: "Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna",
    },

    {
        id: 6,
        icon: "/updates.png",
        title: "Regular Updates",
        detail: "Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna",
    },
];

const prices = [
    {
        id: 1,
        title: "Starter",
        price: 0,
        detail: "Lorem ipsum is simply a dummy test for the printing and industry",
        highlight: false,
        points: [
            {
                id: 1,
                title: "Cas justo odio",
                value: true,
            },
            {
                id: 2,
                title: "Dapibus ac facilis in",
                value: true,
            },
            {
                id: 3,
                title: "Mobi leo risus ",
                value: false,
            },
            {
                id: 4,
                title: "Exceptuer sint occaecat velit",
                value: false,
            },
        ],
    },

    {
        id: 2,
        title: "Exclusive",
        price: 99,
        detail: "Lorem ipsum is simply a dummy test for the printing and industry",
        highlight: true,
        points: [
            {
                id: 1,
                title: "Cas justo odio",
                value: true,
            },
            {
                id: 2,
                title: "Dapibus ac facilis in",
                value: true,
            },
            {
                id: 3,
                title: "Mobi leo risus ",
                value: true,
            },
            {
                id: 4,
                title: "Exceptuer sint occaecat velit",
                value: false,
            },
        ],
    },

    {
        id: 3,
        title: "Premium",
        price: 150,
        detail: "Lorem ipsum is simply a dummy test for the printing and industry",
        highlight: false,
        points: [
            {
                id: 1,
                title: "Cas justo odio",
                value: true,
            },
            {
                id: 2,
                title: "Dapibus ac facilis in",
                value: true,
            },
            {
                id: 3,
                title: "Mobi leo risus ",
                value: true,
            },
            {
                id: 4,
                title: "Exceptuer sint occaecat velit",
                value: true,
            },
        ],
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
                    <!-- Section A -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div class="my-auto">
                            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100">
                                <span class="block xl:inline">Corporate Website</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 dark:text-gray-400">
                                We are a digital agency that helps brands to
                                achieve their business outcomes. We see
                                technology as a tool to create amazing tools
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
                            <img class="w-autServiceso rounded-lg" src="/landing-1.png" />
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
                            <img class="w-auto rounded-lg" src="/landing-2.png" />
                        </div>
                        <div class="my-auto">
                            <h1 class="uppercase">Our Story</h1>
                            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 pb-5">
                                <span class="block xl:inline">Our team comes with experience and
                                    knowledge</span>
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

                            <p>
                                It is a well established fact that a reader will
                                be distracted by the readable content of a page
                                when looking at its layout. The point of using
                                Lorem Ipsum is that it has a more-or-less normal
                                distribution of letters,look like readable
                                English.
                            </p>
                            <p>
                                There are many variations of passages of Lorem
                                Ipsum available, but the majority have in some
                                form, by injected humor.
                            </p>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Footer
                </footer>
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
                        <img class="rounded-lg w-16" :src="service.icon" />
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
                    <div v-for="price in prices" :key="price.id" class="border p-5 rounded-lg bg-slate-50" :class="{
                        [`shadow-2xl bg-white`]: price.highlight == true,
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

                        <div v-for="point in price.points" :key="point.id"
                            class="m-auto flex justify-start py-1 text-slate-600">
                            <div class="text-center  py-1 px-5 flex gap-1 ">

                                <CheckCircleIcon class="size-5 " :class="{
                        [`text-blue-600 `]:
                            point.value == true,
                    }" />

                                <p class="my-auto">
                                    {{ point.title }}
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
            We love to make perfect solutions for your business
        </h1>

        <p class="text-center p-5 max-w-lg mx-auto">
            Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed
            arse William cack Richard. Block funny around chesed of bum bag old lost the pilot spiffing off his nut.
        </p>

        <div class="m-auto flex justify-center ">
            <button class="text-center border-white  rounded border-2 py-1 px-5">
                Get Started
            </button>
        </div>
    </div>
</template>
