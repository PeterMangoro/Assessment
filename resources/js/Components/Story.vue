<script setup>
const props = defineProps({
    story: {
        type: Object,
    },
});
</script>

<template>
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
                                <span class="block xl:inline">{{
                                story.title
                            }}</span>
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
</template>
