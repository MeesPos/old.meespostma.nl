<template>
    <li>
        <Link :href="href" class="px-2 text-gray-500 hover:text-gray-600">
            <slot />
        </Link>
    </li>
</template>

<script>
export default {
    name: "FooterLink",
    props: {
        href: {
            type: String,
            required: true
        }
    }
}
</script>
