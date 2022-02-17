<template>

</template>

<script>
export default {
    name: "Show",
    props: {
        project: {
            type: Array,
            required: true
        }
    },
    mounted() {
        console.log(this.project);
    }
}
</script>
