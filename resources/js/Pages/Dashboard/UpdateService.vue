<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';

const props = defineProps({
    service: Object,
});

const form = useForm({
    _method: 'PUT',
    title: props.service.title,
    detail: props.service.detail,
    image: null,
});

const imagePreview = ref(null);
const imageInput = ref(null);

const updateServiceInformation = () => {


    form.post(route('service-page.update', props.service.id), {
        errorBag: 'updateServiceInformation',
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
    form.post(route('image.update', props.service.image.id), {
        errorBag: 'updateServiceInformation',
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
    <FormSection @submitted="updateServiceInformation">
        

        <template #form>
            <!-- Service Image -->
            <div class="col-span-6 sm:col-span-4">
                <!-- Service Image File Input -->
                <input id="image" ref="imageInput" type="file" class="hidden" @change="updateImagePreview">

                <InputLabel for="image" value="Image" />

                <!-- Current Service Image -->
                <div v-show="!imagePreview" class="mt-2">
                    <img :src="service.image.path" :alt="service.title" class="rounded-full h-20  w-20  object-cover">
                </div>

                <!-- New Service Image Preview -->
                <div v-show="imagePreview" class="mt-2">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        :style="'background-image: url(\'' + imagePreview + '\');'" />
                </div>

                <SecondaryButton class="mt-2 me-2" type="button" @click.prevent="selectNewImage">
                    Select A New Image
                </SecondaryButton>

                <ActionMessage :on="form.recentlySuccessful" class="me-3">
                    Saved.
                </ActionMessage>

                <SecondaryButton v-if="service.image.path" type="button" class="mt-2 " @click.prevent="saveImage">
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
                <InputLabel for="detail" value="Detail/Description" />
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
