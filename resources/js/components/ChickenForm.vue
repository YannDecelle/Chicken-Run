<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <form @submit.prevent="submitForm" class="flex justify-evenly flex-col" id="projectForm">
                <div class="flex justify-between flex-row items-center"><label>Name</label><input type="text" name="name" v-model="form.name" autocomplete="name" required></div>
                <div class="flex justify-between flex-row items-center"><label>Birthday</label><input type="date" name="birthday" v-model="form.birthday" autocomplete="birthday" required></div>
                <div class="flex justify-between flex-row items-center"><label>Weight</label><input type="number" name="weight" v-model="form.weight" autocomplete="weight" required></div>
                <div class="flex justify-end flex-row items-center">
                    <a v-bind:href="route('chicken.index')" class="focus:outline-none border text-black text-sm py-2.5 px-5 rounded-md bg-white hover:bg-white hover:shadow-lg">Cancel</a>
                    <button class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-600 hover:bg-red-500 hover:shadow-lg">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo';
    import JetButton from "@/Jetstream/Button";

    export default 
    {
        props: ['chickens'],
        components: 
        {
            JetApplicationLogo,
            JetButton,
        },
        data() {
            return {
                form: this.$inertia.form({
                    name: this.chickens ? this.chickens.name : '',
                    birthday: this.chickens ? this.chickens.birthday : '',
                    weight: this.chickens ? this.chickens.weight : ''
                }),
            }
        },
        methods:
        {
            submitForm() 
            {
                if (this.chickens) 
                {
                    this.$inertia.put(this.route('chicken.update', this.chickens.id), this.form);
                } 
                else 
                {
                    this.$inertia.post(this.route('chicken.store'), this.form);
                }
            },
            testID()
            {
                var result = this.chickens;
                console.log(result);
            }
        }
    }
</script>

<style scoped lang="scss">

form
{
    div
    {
        input, textarea, select
        {
            width: 50%;
            border: solid 1px rgb(182, 182, 182);
            border-radius: 10px;
        }
        input, label
        {
            margin: 2% 0;
        }
    } 
    div:last-of-type
    {
        margin: 2% 0;

        a, button
        {
            margin: 0 1%;
        }
    }  
    p
    {
        margin: 0 0 1% 0;
    }
    h3
    {
        margin: 5% 0 0 0;
    }
}
</style>
