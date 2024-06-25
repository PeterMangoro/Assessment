<template>
    <a :href="href" @click.prevent="scroll" :class="classes">
        <slot></slot>
    </a>
</template>

<script setup>

import { computed } from 'vue';
const props = defineProps({
    href: {
        type: String,
        required: true,
    },
})
const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
});

function scroll() {

    document.querySelector(props.href)
        .scrollIntoView({ behavior: 'smooth' });
}

</script>
