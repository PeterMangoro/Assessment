<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import ActionMessage from "@/Components/ActionMessage.vue";
import FormSection from "@/Components/FormSection.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";

const props = defineProps({
    story: Object,
});

const form = useForm({
    _method: "PUT",
    title: props.story.title,
    detail: props.story.detail,
    image: null,
});

const imagePreview = ref(null);
const imageInput = ref(null);

const updateStoryInformation = () => {
    form.post(route("story-page.update", props.story.id), {
        errorBag: "updateStoryInformation",
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
    form.post(route("image.update", props.story.image.id), {
        errorBag: "updateStoryInformation",
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
    <FormSection @submitted="updateStoryInformation">
        <template #title> Story Section </template>

        <template #description>
            Update your Story Section title and description. You can also change
            the image.
        </template>

        <template #form>
            <!-- Story Image -->
            <div class="col-span-6 sm:col-span-4">
                <!-- Story Image File Input -->
                <input id="image" ref="imageInput" type="file" class="hidden" @change="updateImagePreview" />

                <InputLabel for="image" value="Image" />

                <!-- Current Story Image -->
                <div v-show="!imagePreview" class="mt-2">
                    <img :src="story.image.path" :alt="story.title" class="rounded h-48 w-48 object-cover" />
                </div>

                <!-- New Story Image Preview -->
                <div v-show="imagePreview" class="mt-2">
                    <span class="block rounded w-48 h-48 bg-cover bg-no-repeat bg-center" :style="'background-image: url(\'' + imagePreview + '\');'
        " />
                </div>

                <SecondaryButton class="mt-2 me-2" type="button" @click.prevent="selectNewImage">
                    Select A New Image
                </SecondaryButton>

                <ActionMessage :on="form.recentlySuccessful" class="me-3">
                    Saved.
                </ActionMessage>

                <SecondaryButton v-if="story.image.path" type="button" class="mt-2" @click.prevent="saveImage">
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
