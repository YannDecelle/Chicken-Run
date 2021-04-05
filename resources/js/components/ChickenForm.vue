<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <form @submit.prevent="submitForm" class="flex justify-evenly flex-col" id="projectForm">
                <div class="flex justify-between flex-row items-center"><label>Name</label><input type="text" name="name" v-model="form.name" autocomplete="name" required></div>
                <div class="flex justify-between flex-row items-center"><label>Birthday</label><input type="date" name="birthday" v-model="form.birthday" autocomplete="birthday" required></div>
                <div class="flex justify-between flex-row items-center"><label>Weight</label><input type="number" name="weight" v-model="form.weight" autocomplete="weight" required></div>
                
                <div class="flex justify-end flex-row items-center">
                    <a href="/chicken" class="focus:outline-none border text-black text-sm py-2.5 px-5 rounded-md bg-white hover:bg-white hover:shadow-lg">Cancel</a>
                    <button class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-800 hover:bg-blue-600 hover:shadow-lg">Save</button>
                    <!-- <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Save
                    </jet-button> -->
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
        components: 
        {
            JetApplicationLogo,
            JetButton,
        },
        props: ['chicken'],
        data() {
            return {
                form: this.$inertia.form({
                    name: this.post ? this.post.name : '',
                    birthday: this.post ? this.post.birthday : '',
                    weight: this.post ? this.post.weight : ''
                }),
            }
        },
        methods:
        {
            submitForm() 
            {
                if (this.post) 
                {
                    this.$inertia.put(this.route('chicken.update', this.post.id), this.form);
                } else 
                {
                    this.$inertia.post(this.route('chicken.store'), this.form);
                }
            },
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
