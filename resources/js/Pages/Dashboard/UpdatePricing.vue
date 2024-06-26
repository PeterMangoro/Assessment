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
import CheckBoxGroup from "@/Components/Checkbox/check-box-group.vue";


const props = defineProps({
    price: Object,
});

const form = useForm({
    _method: 'PUT',
    title: props.price.title,
    detail: props.price.detail,
    price: props.price.price,
    // points:[]
});


const updatePriceInformation = () => {


    form.post(route('price-page.update', props.price.id), {
        errorBag: 'updatePriceInformation',
        preserveScroll: true,
       
    });
};

// const onChange = (val) => {
   
//     val[0].checked === true
//         ? form.points.push(val[0].id)
//         : form.points.pop(val[0].id);
// };



</script>

<template>
    <FormSection @submitted="updatePriceInformation">


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

            <!-- Price -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="price" value="Price" />
                <TextInput id="price" v-model="form.price" type="number" step="0.01" class="mt-1 block w-full" required
                    autocomplete="price" />
                <InputError :message="form.errors.price" class="mt-2" />

            </div>

            <!-- Points -->
            <!-- <div class="col-span-6 sm:col-span-4 dark:text-white py-2">
                <InputLabel for="price" value="Points" />
                <span >
                    <CheckBoxGroup v-for="point in price.packages" :key="point.id" :items="[
        {
            label: point.point.title,
            id: point.id,
        },
    ]" @on-change="onChange" />
                </span>
                <InputError :message="form.errors.price" class="mt-2" />

            </div> -->
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
