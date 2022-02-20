<template>
    <div class="px-4 my-4 sm:my-8 lg:my-10 mx-auto lg:max-w-screen-xl sm:max-w-xl md:max-w-full sm:px-6 md:px-8">
        <div class="space-y-6">
            <h1 class="text-4xl leading-tight font-bold text-gray-900 xl:text-5xl" v-html="category.title + '.'" />
            <p class="max-w-lg text-gray-600 md:max-w-4xl" v-html="category.description" />
        </div>
        <div class="py-8 lg:py-12 sm:py-10">
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
                <div v-for="project in projects" :key="project.id" class="relative">
                    <Link :href="'/projects/' + project.slug">
                        <Link :href="'/projects/' + project.slug" class="block overflow-hidden group rounded-xl">
                            <img :src="project.featured_image"
                                 class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110"
                                 :alt="project.excerpt"
                            >
                        </Link>
                        <div class="relative mt-5">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">{{ category.title }}</p>
                            <Link :href="'/projects/' + project.slug" class="block mb-3 hover:underline">
                                <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">{{ project.title }}</h2>
                            </Link>
                            <p class="mb-4 text-gray-700">{{ project.excerpt }}</p>
                            <Link :href="'/projects/' + project.slug" class="font-medium underline">Read More</Link>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Index",
    props: {
        category: {
            type: Array,
            required: true
        },
        projects: {
            type: Array,
            required: true
        }
    },
    mounted() {
        console.log(this.category, this.projects);
    }
}
</script>
