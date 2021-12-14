<template>
    <div class="bg-white py-3 flex items-center justify-between border-t border-gray-200">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium" v-text="from" />
                    to
                    <span class="font-medium" v-text="to" />
                    of
                    <span class="font-medium" v-text="total" />
                    results
                </p>
            </div>
            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a v-for="(link, index) in links"
                       :href="link.url"
                       :class="{
                           'z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium' : link.active,
                           'bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium' : ! link.active,
                           'bg-gray-100 hover:bg-gray-100' : ! link.url
                       }"
                    >
                        <span v-if="index === links.length - 1"><ChevronRightIcon class="h-5 w-5" aria-hidden="true" /></span>
                        <span v-else-if="index === 0"><ChevronLeftIcon class="h-5 w-5" aria-hidden="true" /></span>
                        <span v-else>{{ link.label }}</span>
                        <!--                        <span v-else>{{ link.label }}</span>-->
                    </a>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/solid'

export default {
    name: "Pagination",
    components: {
        ChevronLeftIcon,
        ChevronRightIcon,
    },
    props: {
        links: Array,
        from: Number,
        to: Number,
        total: Number
    }
}
</script>
