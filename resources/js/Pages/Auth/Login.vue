<template>
    <section class="h-screen bg-gray-50">
        <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form @submit.prevent="submit" class="space-y-6">
                        <Input name="email"
                               v-model:modelValue="form.email"
                               label="Email address"
                               type="email"
                               autocomplete="email"
                               :required="true"
                        />
                        <span v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1" />

                        <Input name="password"
                               v-model:modelValue="form.password"
                               label="Password"
                               type="password"
                               autocomplete="current-password"
                               :required="true"
                        />
                        <span v-if="form.errors.email" v-text="form.errors.password" class="text-red-500 text-xs mt-1" />

                        <div>
                            <button type="submit"
                                v-text="'Sign In'"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Input from "../../Shared/AuthInput"
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    name: "Login",
    components: { Input },
    data() {
        return {
            form: useForm({
                email: '',
                password: ''
            })
        }
    },
    methods: {
        submit() {
            this.form.post('/login')
        }
    }
}
</script>

<style scoped>

</style>
