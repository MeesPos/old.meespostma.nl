<template>
    <div class="w-full pb-8 bg-white" x-data="{ mobileMenuOpen: false }">
        <Navigation />

        <slot />
    </div>
</template>

<script>
import Navigation from "../Shared/Navigation";
export default {
    name: "Layout",
    components: {
        Navigation
    }
}
</script>

<style scoped>

</style>
