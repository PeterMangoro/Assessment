<script setup>
import { PlayCircleIcon } from "@heroicons/vue/24/solid";

const props = defineProps({
    landing:{
        type: Object,
    }
})
</script>
<template>
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
        <div class="my-auto">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100">
                <span class="block xl:inline">{{
                    landing.title
                }}</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 dark:text-gray-400">
                {{ landing.detail }}
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
            <img class="w-auto rounded-lg" :src="landing.image.path" />
        </div>
    </div>
</template>