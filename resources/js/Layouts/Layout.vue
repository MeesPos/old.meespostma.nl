<template>
    <div class="w-full pb-8 bg-white" x-data="{ mobileMenuOpen: false }">
        <Navigation />

        <slot />

        <Footer />
    </div>
</template>

<script>
import Navigation from "../Shared/Navigation";
import Footer from "../Shared/Footer";
export default {
    name: "Layout",
    components: {
        Footer,
        Navigation
    }
}
</script>
