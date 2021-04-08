<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 flex items-center justify-center flex-col">
            <img src="/img/chicken.png" :alt="chickens.name"/>
            <div class="text-center" id="chicken">
                <p class="text-5xl font-black" color="#EF3B2D">{{chickens.name}}</p>
                <label>Birthday :</label>
                <p class="font-black" color="#EF3B2D">{{chickens.birthday}}</p>
                <label>Weight :</label>
                <p class="font-black">{{chickens.weight}}</p>
                <label>Steps :</label>
                <p class="text-5xl font-black">{{chickens.steps}}</p>
            </div>
            <a href="" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-600 hover:bg-red-500 hover:shadow-lg">Edit Chicken</a>
        </div>
    </div>
</template>

<style scoped lang="scss">
#chicken
{
    p:first-child
    {
        margin: 10% 0;
    }
    p
    {
        margin-bottom: 10%;
    }
}
</style>

<script>

    export default {
        props:['chickens'],
        components: {
        },
        mounted() 
        {
            this.AddStep();
        },
        methods:
        {
            AddStep()
            {
                alert('Page Loaded')
            }
        },
    }
</script>
