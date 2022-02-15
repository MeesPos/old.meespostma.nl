<template>
    <div class="w-full h-full mt-2">
        <div class="mx-auto max-w-7xl lg:px-10">
            <div class="items-start justify-center py-12 bg-gray-100 lg:rounded-xl px-14 md:py-20 xl:px-20 xl:py-20">
                <div class="flex flex-col items-start justify-center w-full space-y-10 text-left md:w-3/4 sm:text-center md:text-left sm:items-center md:items-start">
                    <div class="relative">
                        <h1 class="text-4xl leading-tight font-bold text-gray-900 xl:text-5xl">{{ this.$t('home.header.title') }}</h1>
                        <h2 class="text-2xl leading-tight font-medium text-gray-900 xl:text-3xl mt-2">{{ this.$t('home.header.subtitle') }}</h2>
                    </div>
                    <p class="max-w-lg text-gray-600 md:max-w-none">{{ this.$t('home.header.description') }}</p>
                    <a href="#_" class="w-full px-12 py-5 text-sm font-medium text-center text-white uppercase bg-gray-900 rounded-full sm:w-auto">{{ this.$t('about-me') }}</a>
                </div>
            </div>
            <!-- start bottom cards -->
            <div class="flex flex-col w-full lg:flex-row lg:space-x-10 lg:mt-10 sm:pb-10">
                <div class="flex flex-col items-center justify-between w-full p-0 overflow-hidden bg-blue-100 lg:rounded-2xl sm:flex-row sm:p-10">
                    <div class="relative flex items-center p-8 sm:p-0">
                        <img src="/images/project-icon.png" class="w-20 mr-5">
                        <div class="relative pr-5">
                            <h2 class="font-medium text-blue-800">{{ this.$t('my-projects') }}</h2>
                            <p class="mt-1 text-sm text-blue-600">{{ this.$t('home.my-projects.description') }}</p>
                        </div>
                    </div>
                    <a href="#_" class="inline-flex justify-center flex-shrink-0 w-full px-5 py-3 mt-2 text-xs font-medium text-center text-white uppercase bg-blue-400 sm:rounded-full sm:w-auto">{{ this.$t('my-projects') }}</a>
                </div>
                <div class="flex flex-col items-center justify-between w-full p-0 overflow-hidden bg-green-100 lg:rounded-2xl sm:flex-row  sm:p-10">
                    <div class="relative flex items-center p-8 sm:p-0">
                        <img src="/images/contact-icon.png" class="w-20 mr-5">
                        <div class="relative pr-5">
                            <h2 class="font-medium text-green-800">{{ this.$t('contact-me') }}</h2>
                            <p class="mt-1 text-sm text-green-600">{{ this.$t('home.contact-me.description') }}</p>
                        </div>
                    </div>
                    <a href="#_" class="inline-flex justify-center flex-shrink-0 w-full px-5 py-3 mt-2 text-xs font-medium text-center text-white uppercase bg-green-400 sm:rounded-full sm:w-auto">{{ this.$t('contact-me') }}</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home"
}
</script>
