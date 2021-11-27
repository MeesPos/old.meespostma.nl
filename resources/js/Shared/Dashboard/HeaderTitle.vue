<template>
    <h1 class="text-2xl font-semibold text-gray-900" v-text="title" />
</template>

<script>
export default {
    name: "HeaderTitle",
    props: {
        title: String
    }
}
</script>

<style scoped>

</style>
