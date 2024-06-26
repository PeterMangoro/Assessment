<script setup>
const props = defineProps({
    footer: {
        type: Object,
    },
});
</script>
<template>
    <div class="bg-blue-600 p-20 text-white">
        <h1 class="text-center text-4xl font-extrabold max-w-lg mx-auto">
            {{ footer.title }}
        </h1>

        <p class="text-center p-5 max-w-lg mx-auto">
            {{ footer.detail }}
        </p>

        <div class="m-auto flex justify-center">
            <button class="text-center border-white rounded border-2 py-1 px-5">
                Get Started
            </button>
        </div>
    </div>
</template>
