<template>
    <div class="px-4 my-4 sm:my-8 lg:my-10 mx-auto lg:max-w-screen-xl sm:max-w-xl md:max-w-full sm:px-6 md:px-8">
        <div>
            <img :src="project.featured_image" class="w-full rounded-xl">
        </div>

        <div class="mt-8 flex flex-wrap overflow-hidden">
            <div class="space-y-6 w-full overflow-hidden md:w-4/6 lg:w-4/6 xl:w-4/6 pr-8">
                <h1 class="text-4xl leading-tight font-bold text-gray-900 xl:text-5xl">{{ project.title }}</h1>
                <p v-html="project.content" />
            </div>

            <div class="w-full mt-12 overflow-hidden md:w-2/6 lg:w-2/6 xl:w-2/6 md:mt-0">
                <div class="ml-2 mr-2 md:ml-4">
                    <div class="rounded-lg bg-gray-50 p-7" v-if="project.github_url">
                        <div class="text-left">
                            <h2 class="mb-1 text-lg font-medium text-gray-900">{{ this.$t('projects.detail.github.title') }}</h2>

                            <a :href="project.github_url" target="_blank">
                                <button type="button"
                                        class="w-full py-3 mt-5 text-sm font-medium tracking-widest text-white uppercase bg-gray-900 rounded-lg"
                                >
                                    {{ this.$t('projects.detail.github.button') }}
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg bg-gray-50 p-7 mt-8" v-if="project.live_url">
                        <div class="text-left">
                            <h2 class="mb-1 text-lg font-medium text-gray-900">{{ this.$t('projects.detail.live.title') }}</h2>

                            <a :href="project.live_url" target="_blank">
                                <button type="button"
                                        class="w-full py-3 mt-5 text-sm font-medium tracking-widest text-white uppercase bg-gray-900 rounded-lg"
                                >
                                    {{ this.$t('projects.detail.live.button') }}
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="mt-8 ml-7">
                        <h2 class="mb-3 text-lg font-medium text-gray-900">{{ this.$t('category') }}</h2>
                        <ul>
                            <li class="flex"><a href="#_" class="flex-1 block py-2 font-serif text-lg hover:underline font-thin text-blue-900">{{ project.category.title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Show",
    props: {
        project: {
            type: Array,
            required: true
        }
    }
}
</script>
