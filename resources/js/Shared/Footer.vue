<template>

    <!-- Section 1 -->
    <section class="py-10">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-col justify-between mt-5 mb-5 text-center sm:mb-0 sm:mt-12 sm:flex-row">
                <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm font-bold">
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Contact</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">About US</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">FAQ's</a> </li>
                    <li class=""> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Terms</a></li>
                </ul>
                <p class="mt-3 text-xs leading-tight text-gray-500 sm:mt-0"> © Mees Postma {{ new Date().getFullYear() }}</p>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Footer"
}
</script>
