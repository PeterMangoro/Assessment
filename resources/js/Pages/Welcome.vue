<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { BeakerIcon, PlayCircleIcon } from "@heroicons/vue/24/solid";

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
        href: "/",
    },
    {
        id: 3,
        title: "Pricing",
        href: "/",
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
        id:1,
        title: "Starter",
        price: 10,
       points:[
        {
            id: 1,
            title: "cas justo odio",
        }
       ]
    }
]

</script>

<template>
    <Head title="Welcome" />
    <div class="text-white/80 bg-blue-600 dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="">
                    <nav
                        v-if="canLogin"
                        class="-mx-3 flex flex-1 justify-start py-5"
                    >
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <div class="grid grid-cols-3">
                                <div
                                    class="cols-span-1 flex gap-1 my-auto font-extrabold text-xl"
                                >
                                    <img class="h-10 w-10" src="/logo.png" />
                                    Business
                                </div>
                                <div class="cols-span-2">
                                    <Link
                                        v-for="item in items"
                                        key="item.id"
                                        :href="route('login')"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white dark:focus-visible:ring-white"
                                    >
                                        {{ item.title }}
                                    </Link>
                                </div>
                            </div>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <!-- Section A -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div class="my-auto">
                            <h1
                                class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100"
                            >
                                <span class="block xl:inline"
                                    >Corporate Website</span
                                >
                            </h1>
                            <p
                                class="mt-3 text-base text-gray-500 dark:text-gray-400"
                            >
                                We are a digital agency that helps brands to
                                achieve their business outcomes. We see
                                technology as a tool to create amazing tools
                            </p>

                            <div class="flex justify-start gap-5 my-auto">
                                <button
                                    type="submit"
                                    class="mt-10 flex items-center justify-center rounded-md border border-transparent bg-white text-blue-600 px-8 py-1 text-base uppercase font-bold focus:outline-none focus:ring-2 focus:ring-offset-2"
                                >
                                    Get Started
                                </button>

                                <button
                                    type="submit"
                                    class="mt-10 flex items-center justify-center rounded-md border border-transparent px-8 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2"
                                >
                                    <PlayCircleIcon
                                        class="size-10 text-white"
                                    />
                                    Watch Intro
                                </button>
                            </div>
                        </div>
                        <div>
                            <img
                                class="w-autServiceso rounded-lg"
                                src="/landing-1.png"
                            />
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Section B -->
    <div class="text-black bg-white">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div>
                            <img
                                class="w-auto rounded-lg"
                                src="/landing-2.png"
                            />
                        </div>
                        <div class="my-auto">
                            <h1 class="uppercase">Our Story</h1>
                            <h1
                                class="text-4xl font-extrabold tracking-tight text-gray-900 pb-5"
                            >
                                <span class="block xl:inline"
                                    >Our team comes with experience and
                                    knowledge</span
                                >
                            </h1>

                            <div
                                class="flex justify-start gap-5 bg-slate-200 my-auto h-auto rounded-lg p-2 capitalize"
                            >
                                <button
                                    type="submit"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-blue-500 text-white px-8 py-1 text-base font-bold focus:outline-none focus:ring-2 focus:ring-offset-2"
                                >
                                    Who Are We
                                </button>

                                <button
                                    type="submit"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-white px-8 py-1 text-base font-bold focus:outline-none focus:ring-2 focus:ring-offset-2"
                                >
                                    Our Vision
                                </button>

                                <button
                                    type="submit"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-white px-8 py-1 text-base font-bold focus:outline-none focus:ring-2 focus:ring-offset-2"
                                >
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

                <footer
                    class="py-16 text-center text-sm text-black dark:text-white/70"
                >
                    Footer
                </footer>
            </div>
        </div>

        <div>
            <div class="m-auto flex justify-center py-5">
                <p
                    class="text-center border-blue-600 rounded-full border-2 py-1 px-5"
                >
                    Services
                </p>
            </div>
            <div>
                <div
                    class="grid sm:grid-cols-3 grid-cols-1 gap-3 max-w-6xl mx-auto"
                >
                    <div
                        v-for="service in services"
                        :key="service.id"
                        class="border p-5 rounded"
                    >
                        <img class="rounded-lg w-16" :src="service.icon" />
                        <p class="py-3 font-bold">{{ service.title }}</p>
                        <p class="text-base text-black/50">
                            {{ service.detail }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="m-auto flex justify-center py-5">
                <p
                    class="text-center border-blue-600 rounded-full border-2 py-1 px-5"
                >
                    Pricing
                </p>
            </div>
            <div>
                <div
                    class="grid sm:grid-cols-3 grid-cols-1 gap-3 max-w-6xl mx-auto"
                >
                    <div
                        v-for="service in services"
                        :key="service.id"
                        class="border p-5 rounded"
                    >
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
</template>
