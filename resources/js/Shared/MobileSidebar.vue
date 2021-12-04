<template>
    <nav class="px-2 space-y-1">
        <Link v-for="item in navigation"
              :key="item.name"
              :href="item.href"
              :method="item.method"
              :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']">
            <component :is="item.icon"
                       :class="[item.current ? 'text-gray-300' : 'text-gray-400 group-hover:text-gray-300', 'mr-4 flex-shrink-0 h-6 w-6']"
                       aria-hidden="true"
            />
            {{ item.name }}
        </Link>
    </nav>
</template>

<script>
export default {
    name: "MobileSidebar",
    props: {
        navigation: Array
    }
}
</script>
