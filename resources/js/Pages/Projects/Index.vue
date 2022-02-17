<template>

    <!-- Section 1 -->
    <section class="bg-white">
        <div class="px-8 py-10 mx-auto lg:max-w-screen-xl sm:max-w-xl md:max-w-full sm:px-12 md:px-16 lg:py-20 sm:py-16">
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
                <div v-for="project in projects" :key="project.id" class="relative">
                    <a href="#_" class="block overflow-hidden group rounded-xl">
                        <img src="https://images.unsplash.com/photo-1465310477141-6fb93167a273?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;h=1700&amp;q=80" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="">
                    </a>
                    <div class="relative mt-5">
                        <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">{{ project.category.title }}</p>
                        <a href="#" class="block mb-3 hover:underline">
                            <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">{{ project.title }}</h2>
                        </a>
                        <p class="mb-4 text-gray-700">{{ project.content }}</p>
                        <a href="#_" class="font-medium underline">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
