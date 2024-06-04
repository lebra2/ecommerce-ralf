<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

onMounted(() => {
    initFlowbite();
});




</script>

<template>
    <Header/>


    <slot/>

    <Footer/>

    
</template>
