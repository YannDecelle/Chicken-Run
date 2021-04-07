<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <!-- Appel de la base de donnée laravel "user" stockée dans les props afin d'afficher le nom d'utilisateur sans avoir à l'appelée -->
            <h2 class="text-3xl font-black">Welcome, {{ $page.props.user.name }}</h2>
            <h2 class="text-3xl font-black">Your Chickens</h2>
             <!-- Bouton d'envois vers le formulaire de création de l'objet Chicken -->
            <div>
                <a href="/chicken/add">+  Add Chicken</a>
            </div>
            <!-- Appel vers le composant ChickenList -->
            <ChickenList :chickens="chickens"/>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo';
    import ChickenList from '../components/ChickenList';

    export default {
        props:['chickens'],
        components: {
            JetApplicationLogo,
            ChickenList
        },
    }
</script>
