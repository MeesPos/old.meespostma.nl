<template>
    <div>
        <label :for="name"
               class="block text-sm font-medium text-gray-700"
               v-text="label"
        />

        <div class="mt-1">
            <input :id="name"
                   :name="name"
                   :type="type"
                   :autocomplete="autocomplete"
                   :value="modelValue"
                   @input="$emit('update:modelValue', $event.target.value)"
                   :required="required"
                   :placeholder="placeholder"
                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            />
        </div>
    </div>
</template>

<script>
export default {
    name: "AuthInput",
    props: {
        name: String,
        label: String,
        type: String,
        autocomplete: String,
        placeholder: String,
        required: Boolean,
        modelValue: String
    },
    emits: ['update:modelValue'],
    methods: {
        changeModelValue(value) {
            this.$emit('update:modelValue', value);
        }
    }
}
</script>
