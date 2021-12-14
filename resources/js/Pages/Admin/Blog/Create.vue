<template>
    <HeaderTitle title="Create Post" />

    <form @submit.prevent="submit" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>
                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                    <FormInput name="title"
                        v-model:modelValue="form.title"
                        label="Title"
                        type="text"
                        autocomplete="title"
                        :required="true"
                    />
                    <span v-if="form.errors.title" v-text="form.errors.title" class="text-red-500 text-xs mt-1" />

                    <ImageInput name="featured_image"
                                v-model:modelValue="form.featured_image"
                                label="Featured Image"
                    />
                    <span v-if="form.errors.featured_image" v-text="form.errors.featured_image" class="text-red-500 text-xs mt-1" />

                    <CategorySelect :categories="categories"
                                    v-model:modelValue="form.category_id"
                    />
                    <span v-if="form.errors.category_id" v-text="form.errors.category_id" class="text-red-500 text-xs mt-1" />

                    <MultiSelect :options="tags"
                                 label="Tags"
                                 name="tags"
                                 v-model:modelValue="form.tags"
                    />
                    <span v-if="form.errors.tags" v-text="form.errors.tags" class="text-red-500 text-xs mt-1" />

                    <MarkdownTextarea
                        v-model:modelValue="form.content"
                    />
                    <span v-if="form.errors.content" v-text="form.errors.content" class="text-red-500 text-xs mt-1" />
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</template>

<script>
import Admin from "../../../Layouts/Admin";
import HeaderTitle from "../../../Shared/Dashboard/HeaderTitle";
import FormInput from "../../../Shared/FormInput";
import MarkdownTextarea from "../../../Shared/MarkdownTextarea";
import { useForm } from "@inertiajs/inertia-vue3";
import ImageInput from "../../../Shared/ImageInput";
import CategorySelect from "../../../Shared/CategorySelect";
import MultiSelect from "../../../Shared/MultiSelect";

export default {
    name: "Create",
    layout: Admin,
    props: {
        categories: Object,
        tags: Object
    },
    components: {
        MultiSelect,
        CategorySelect,
        ImageInput,
        FormInput,
        HeaderTitle,
        MarkdownTextarea
    },
    data() {
        return {
            form: useForm({
                title: '',
                content: '',
                featured_image: '',
                category_id: '',
                tags: []
            }),
            showModal: true
        }
    },
    methods: {
        submit() {
            console.log(this.form.featured_image);

            this.form.post('/dashboard/posts', {
                forceFormData: true,
            });
        }
    }
}
</script>
