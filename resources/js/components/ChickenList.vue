<template>
        <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Birthday</th>
                                <th class="py-3 px-6 text-center">Steps</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center"></th>
                                <th class="py-3 px-6 text-center"></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="font-medium">Lorem</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>12/12/12</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    62
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a class="bg-purple-500 text-white py-1 px-3 rounded-full text-xs">Is running</a>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a class="bg-green-500 text-white py-1 px-3 rounded-full text-xs">Edit</a>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a class="bg-red-500 text-white py-1 px-3 rounded-full text-xs">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
</template>

<style scoped>

</style>

<script>

    export default {
        components: {
        }
    }
</script>
