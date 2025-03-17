<script setup>
import Time from "../components/utils/Time.vue"
import Header from '../Layouts/Header.vue';
    defineProps({
        name: String,
        age: Number
    })
</script>

<template>
    <Head title="About" />
    <Header/>
    <!-- start Content about -->
    <div class="container mx-auto max-w-screen-xl lg:px-6 py-2.5">
        <div class="flex justify-between">
           <h1 class="text-2xl font-semibold text-gray-200 w-2/12 bg-blue-900 text-center rounded-t-lg ">{{$page.component}}</h1>
           <Time />
        </div>
           <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
              <div class="gap-4 mb-4 ">
                    <div class="p-4  rounded-lg bg-gray-100">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-slate-700">Regain <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">control</mark> over your days</h1>
                        <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400" preserve-scroll>Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                </div>
              </div>
          </div>
      </div>
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