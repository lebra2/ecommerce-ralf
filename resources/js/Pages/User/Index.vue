<script setup>
import UserLayout from "./Layouts/UserLayout.vue";
import Products from "../User/Components/Products.vue";
//products list
defineProps({
    products: Array,
});
</script>
<template>
    <UserLayout>
        <!-- end -->
        <div class="bg-white">
            <div
                class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
            >


                <div class="flex flex-col justify-center items-center py-24">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white"
                    >
                        Laravel E-Pood
                    </h1>
                    <p
                        class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"
                    >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non itaque nesciunt cupiditate deserunt aut, temporibus rem harum molestiae corporis minus velit officiis nemo accusamus ipsum quidem. Facere labore hic minus.
                    </p>
                
                </div>

                <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                    List of products
                </h2>

                <!-- product list component -->
                <Products :products="products"></Products>
                <!-- end -->
            </div>
        </div>
    </UserLayout>
</template>
