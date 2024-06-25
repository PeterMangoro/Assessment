<script setup>
import { ref } from 'vue';
import { Link, router, useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';

const props = defineProps({
    landing: Object,
});

const form = useForm({
    _method: 'PUT',
    title: props.landing.title,
    detail: props.landing.detail,
    image: null,
});

const imagePreview = ref(null);
const imageInput = ref(null);

const updateLandingInformation = () => {
    

    form.post(route('landing-page.update',props.landing.id), {
        errorBag: 'updateLandingInformation',
        preserveScroll: true,
        onSuccess: () => clearImageFileInput(),
    });
};


const selectNewImage = () => {
    imageInput.value.click();
};

const updateImagePreview = () => {
    const image = imageInput.value.files[0];

    if (!image) return;

    const reader = new FileReader();

    reader.onload = (e) => {
        imagePreview.value = e.target.result;
    };

    reader.readAsDataURL(image);
};

const saveImage = () => {
    if (imageInput.value) {
        form.image = imageInput.value.files[0];
    }
    form.post(route('image.update', props.landing.image.id), {
        errorBag: 'updateLandingInformation',
        preserveScroll: true,
        onSuccess: () => clearImageFileInput(),
    });
};

const clearImageFileInput = () => {
    if (imageInput.value?.value) {
        imageInput.value.value = null;
    }
};
</script>

<template>
    <FormSection @submitted="updateLandingInformation">
        <template #title>
            Landing Information
        </template>

        <template #description>
            Update your account's profile information and detail address.
        </template>

        <template #form>
            <!-- Landing Image -->
            <div class="col-span-6 sm:col-span-4">
                <!-- Landing Image File Input -->
                <input id="image" ref="imageInput" type="file" class="hidden" @change="updateImagePreview">

                <InputLabel for="image" value="Image" />

                <!-- Current Landing Image -->
                <div v-show="!imagePreview" class="mt-2">
                    <img :src="landing.image.path" :alt="landing.title" class="rounded h-48  w-48  object-cover">
                </div>

                <!-- New Landing Image Preview -->
                <div v-show="imagePreview" class="mt-2">
                    <span class="block rounded w-48 h-48 bg-cover bg-no-repeat bg-center"
                        :style="'background-image: url(\'' + imagePreview + '\');'" />
                </div>

                <SecondaryButton class="mt-2 me-2" type="button" @click.prevent="selectNewImage">
                    Select A New Image
                </SecondaryButton>

                <SecondaryButton v-if="landing.image.path" type="button" class="mt-2 " @click.prevent="saveImage">
                    Save Image
                </SecondaryButton>

                <InputError :message="form.errors.image" class="mt-2" />
            </div>

            <!-- Title -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="title" value="Title" />
                <TextInput id="title" v-model="form.title" type="text" class="mt-1 block w-full" required
                    autocomplete="title" />
                <InputError :message="form.errors.title" class="mt-2" />
            </div>

            <!-- Detail -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="detail" value="Detail" />
                <TextArea id="detail" v-model="form.detail" type="text" class="mt-1 block w-full" required
                    autocomplete="username" />
                <InputError :message="form.errors.detail" class="mt-2" />

            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="me-3">
                Saved.
            </ActionMessage>

            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </PrimaryButton>
        </template>
    </FormSection>
</template>
