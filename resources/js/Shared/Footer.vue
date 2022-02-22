<template>

    <!-- Section 1 -->
    <section class="py-10">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-col justify-between mt-5 mb-5 text-center sm:mb-0 sm:mt-12 sm:flex-row">
                <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm font-bold">
                    <FooterLink href="/">
                        Home
                    </FooterLink>

                    <FooterLink href="/about-me">
                        {{ this.$t('about-me') }}
                    </FooterLink>

                    <FooterLink href="/projects">
                        {{ this.$t('my-projects') }}
                    </FooterLink>

                    <FooterLink href="/contact">
                        {{ this.$t('contact-me') }}
                    </FooterLink>
                </ul>
                <p class="mt-3 text-xs leading-tight text-gray-500 sm:mt-0"> © Mees Postma {{ new Date().getFullYear() }}</p>

            </div>
        </div>
    </section>
</template>

<script>
import FooterLink from "./FooterLink";
export default {
    name: "Footer",
    components: {FooterLink}
}
</script>
