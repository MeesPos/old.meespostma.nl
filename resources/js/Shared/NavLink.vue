<template>
    <Link class="relative">
        <span><slot/></span>
        <span :class="{
            'w-full h-0.5 bg-gray-900 absolute bottom-0 left-0': active,
            'w-full h-0.5 bg-black opacity-0 group-hover:opacity-100 transform -translate-y-0.5 group-hover:translate-y-0 transition-all ease-out duration-300 absolute bottom-0 left-0' : !active
        }"></span>
    </Link>
</template>

<script>
export default {
    name: "NavLink",
    props: {
        active: {
            type: Boolean,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
