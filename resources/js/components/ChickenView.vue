<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 flex items-center justify-center">
            <img src="/img/chicken.png" :alt="chickens.name"/>
            <div>
                <p>Name</p>
                <p>Birthday</p>
                <p>Nom</p>

            </div>
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
    }
</script>
