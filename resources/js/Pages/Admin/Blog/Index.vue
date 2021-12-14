<template>
    <HeaderTitle title="Posts"/>

    <div class="pb-5 mt-3 sm:flex sm:items-center sm:justify-between">
        <div />
        <div class="mt-3 sm:mt-0 sm:ml-4">
            <Link
                href="/dashboard/posts/create"
                as="button"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                v-text="'Create new Post'"
            />
        </div>
    </div>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Created at
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">View</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="post in posts.data" :key="post.id">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ post.title }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ post.category }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ post.created_at }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <Link :href="post.url" class="text-indigo-600 hover:text-indigo-900" v-text="'View'"/>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <Link href="#" class="text-indigo-600 hover:text-indigo-900" v-text="'Edit'"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <Pagination :links="posts.links"
                    :from="posts.from"
                    :to="posts.to"
                    :total="posts.total"
                    class="mt-6"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Admin from "../../../Layouts/Admin";
import HeaderTitle from "../../../Shared/Dashboard/HeaderTitle";
import Pagination from "../../../Shared/Pagination";

export default {
    name: "Index",
    layout: Admin,
    components: {Pagination, HeaderTitle},
    props: {
        posts: Object
    },
    mounted() {
        console.log(this.posts);
    }
}
</script>
