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
                            <tr class="border-b border-gray-200 hover:bg-gray-100" v-for="chicken in chickens" :key="chicken.id">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="font-medium">{{chicken.name}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{chicken.birthday}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{chicken.steps}}
                                </td>
                                <td class="py-3 px-6 text-center" v-if="chicken.isRunning === 1">
                                    <form @submit.prevent="ToggleElement(chicken.id, chicken.isRunning)">
                                        <input type="submit" value="Is running" class="bg-purple-500 text-white py-1 px-3 rounded-full text-xs outline-none cursor-pointer">
                                    </form>
                                </td>
                                <td class="py-3 px-6 text-center" v-else-if="chicken.isRunning === 0">
                                    <form @submit.prevent="ToggleElement(chicken.id, chicken.isRunning)">
                                        <input type="submit" value="Not running" class="bg-gray-300 text-gray-100 py-1 px-3 rounded-full text-xs outline-none cursor-pointer">
                                    </form>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a class="bg-green-500 text-white py-1 px-3 rounded-full text-xs outline-none cursor-pointer" :href="route('chicken.edit', chicken.id)">Edit</a>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <form @submit.prevent="deleteElement(chicken.id)">
                                        <input type="submit" value="Delete" class="bg-red-500 text-white py-1 px-3 rounded-full text-xs outline-none cursor-pointer">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <!-- <tbody class="text-gray-600 text-sm font-light" v-else>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="font-medium">C'est vide !</span>
                                            <button v-on:click="TestID">TEST</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody> -->
                    </table>
                </div>
            </div>
</template>

<style scoped>
#deletebut
{
    cursor: pointer;
}
</style>

<script>

    export default {
        props:['chickens'],
        components: {
        },
        methods:
        {
            deleteElement(id)
            {
                if (this.chickens) 
                {
                    this.$inertia.delete(this.route('chicken.destroy', id), this.form);
                    // console.log(id);
                }
                else
                {
                    alert('Erreur: Suppression impossible')
                }
            },
            ToggleElement(id)
            {
                if (this.chickens) 
                {
                    // this.$inertia.delete(this.route('chicken.destroy', id), this.form);
                    console.log(this.chickens);
                }
                else
                {
                    alert('Erreur: Suppression impossible')
                }
            },
        },
    }
</script>
