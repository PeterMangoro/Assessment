<script setup>
import { CheckCircleIcon } from "@heroicons/vue/24/outline";
const props = defineProps({
    prices: {
        type: Array,
    },
});
</script>
<template>
    <div class="text-black bg-gray-100 pb-20" id="pricing">
        <div>
            <div class="m-auto flex justify-center py-20">
                <p class="text-center border-blue-600 rounded-full border-2 py-1 px-5">
                    Pricing
                </p>
            </div>
            <div>
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-3 max-w-6xl mx-auto">
                    <div v-for="price in prices" :key="price.id" class="p-5 rounded-lg bg-slate-50" :class="{
                        [`shadow-2xl bg-white border-2`]:
                            price.highlight == true,
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
                            <div class="text-center py-1 px-5 flex gap-1">
                                <CheckCircleIcon class="size-5" :class="{
                        [`text-blue-600 `]: point.value == true,
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
</template>
