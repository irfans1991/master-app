<script setup>
    defineProps({
        name: String,
        age: Number
    })
    import Sidebar from '../components/Sidebar.vue'
    import Navbar from '../components/Navbar.vue'
</script>

<template>
    <Sidebar>
        <h1>Tester</h1>
    </Sidebar>
    <Navbar/>
    <Head title="About" />
    <!-- start Content about -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-slate-700">Regain <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">control</mark> over your days</h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400" preserve-scroll>Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        </div>
    </div>
     <!-- End Content About -->
    <div>
        <h1>
            This About Page - {{ name }}
        </h1>
        <!-- if age nothing -->
        
        <h1 >
            {{ name }} - {{ age }} years old
        </h1>
    </div>
</template>