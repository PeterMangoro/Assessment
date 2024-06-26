<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';


const props = defineProps({
    footer: Object,
});

const form = useForm({
    _method: 'PUT',
    title: props.footer.title,
    detail: props.footer.detail,
    
});


const updateFooterInformation = () => {


    form.post(route('footer-page.update', props.footer.id), {
        errorBag: 'updateFooterInformation',
        preserveScroll: true,
       
    });
};


</script>

<template>
    <FormSection @submitted="updateFooterInformation">

        <template #title>
            Footer Section
        </template>

        <template #description>
            Update your Footer Section title and description. 
        </template>

        <template #form>


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
                    autocomplete="detail" />
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
