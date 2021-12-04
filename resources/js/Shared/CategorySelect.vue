<template>
    <Modal v-model="showModal">
        <form @submit.prevent="submit">
            <h2 class="text-lg font-bold mb-2">Add Category</h2>
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div>
                    <div class="space-y-6 sm:space-y-5 mx-auto">
                        <FormInput name="name"
                            v-model:modelValue="form.name"
                            label="Name"
                            type="text"
                            autocomplete="name"
                            :required="true"
                        />

                        <FormInput name="color"
                            v-model:modelValue="form.color"
                            label="Color"
                            type="color"
                            autocomplete="color"
                            :required="true"
                        />

                        <Textarea name="description"
                            v-model:modelValue="form.description"
                            label="Description"
                        />
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button" @click="showModal = false" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </button>
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </Modal>

    <button type="button" @click="showModal = true">Open Modal</button>
</template>

<script>
import Modal from "./Modal";
import FormInput from "./FormInput";
import Textarea from "./Textarea";
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    name: "CategorySelect",
    components: {
        FormInput,
        Modal,
        Textarea
    },
    data() {
        return {
            form: useForm({
                name: '',
                color: '',
                description: ''
            }),
            categories: [
                'Test',
                'Test 2',
                'Test 3'
            ],
            showModal: false
        }
    },
    methods: {
        submit() {
            this.form.post('/category/create', {
                onSuccess: () => this.showModal = false
            });
        }
    }
}
</script>
