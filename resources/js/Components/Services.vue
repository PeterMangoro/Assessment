<script setup>
const props = defineProps({
    services: {
        type: Array,
    }
})
</script>
<template>
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
                        <img class="rounded-full h-16 w-16 bg-cover bg-no-repeat bg-center" :src="service.image.path" />
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