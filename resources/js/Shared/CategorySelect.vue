<template>
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label
            for="category-select"
            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"
            v-text="'Category'"
        />

        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <select id="category-select"
                ref="category-select"
                @change="updateOption($event)"
                class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
            >
                <option ref="add-category">
                    Add Category
                </option>

                <option v-for="(category, index) in categories"
                    :selected="index === 0 || selectedOption === category.name"
                    :value="category.id"
                    v-text="category.name"
                />
            </select>
        </div>
    </div>

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
                        <span v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1" />

                        <FormInput name="color"
                            v-model:modelValue="form.color"
                            label="Color"
                            type="color"
                            autocomplete="color"
                            :required="true"
                        />
                        <span v-if="form.errors.color" v-text="form.errors.color" class="text-red-500 text-xs mt-1" />

                        <Textarea name="description"
                            v-model:modelValue="form.description"
                            label="Description"
                        />
                        <span v-if="form.errors.description" v-text="form.errors.description" class="text-red-500 text-xs mt-1" />
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button" @click="cancel" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </button>
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </Modal>
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
    props: {
        categories: Object,
        modelValue: String
    },
    data() {
        return {
            form: useForm({
                name: '',
                color: '',
                description: ''
            }),
            showModal: false,
            selectedOption: ''
        }
    },
    emits: ['update:modelValue'],
    methods: {
        submit() {
            this.form.post('/category/create', {
                onSuccess: (data) => {
                    this.showModal = false;
                    this.selectedOption = this.form.name;
                    this.$emit('update:modelValue', data.props.categories.at(-1).id);
                    this.form.reset();
                }
            });
        },
        updateOption(event) {
            this.$emit('update:modelValue', parseInt(event.target.value))

            if(this.$refs["add-category"].selected === true) {
                this.showModal = true;
            }
        },
        cancel() {
            this.showModal = false;
            this.form.reset();
        }
    }
}
</script>
