<template>
    {{ projects }}
</template>

<script>
export default {
    name: "Index",
    props: {
        projects: {
            type: Array,
            required: true
        }
    }
}
</script>
