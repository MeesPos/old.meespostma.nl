<template>
    <vue-final-modal v-model="showModal"
        classes="flex justify-center items-center"
        content-class="flex flex-col m-4 p-4 rounded bg-white w-1/5"
    >
        <slot />
    </vue-final-modal>
</template>

<script>
import { $vfm, VueFinalModal, ModalsContainer } from 'vue-final-modal'
import FormInput from "./FormInput";

export default {
    name: "Modal",
    components: {
        FormInput,
        VueFinalModal,
        ModalsContainer
    },
    data() {
        return {
            showModal: false
        }
    }
}
</script>
