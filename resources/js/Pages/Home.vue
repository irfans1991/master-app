<script setup>
// import demo from '../Layouts/Demo.vue'
// import sidebar from '../Layouts/Sidebar.vue'
// import header from '../Layouts/Header.vue'
// import Header from '../components/Header.vue'
// import Sidebar from '../components/Sidebar.vue'
import Navbar from '../components/Navbar.vue'
import Sidebar from '../components/Sidebar.vue' 
import Dashboard from '../components/dashboard/Dashboard.vue'
// defineOptions({
//     // layout: demo,
//     // layout: header
// })
</script>

<template>
    <Head title="Dashboard"/>
    <Navbar>
        <template #navbar-header-name>
            <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">Adamsan</a>
        </template>
    </Navbar>
    <Sidebar/>
    <Dashboard/>


    <!-- <div class="w-full h-full flex">
        <Sidebar>
            <template #sidebar-home>
                <h1 class="text-white font-bold text-center">Sidebar</h1>
            </template>
        </Sidebar>
        <div class="w-full h-full">
            <Header></Header>
            <div class="w-full h-[calc(100vh-50px)]">
                <div class="w-full h-full text-center">
                    <h1>Hello , {{$page.props.user.auth}} </h1>
                    <h1>{{ $page.component }}</h1>
                </div>
            </div>
        </div>
    </div> -->
    
        
</template>

<!-- <Head title="Home" />
    <Head >
        <meta name="description" content="My Home"/>
    </Head> -->