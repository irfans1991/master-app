<script setup>
    import { Link } from '@inertiajs/vue3';
    import Navbar from '../../components/Navbar.vue';
    import Sidebar from '../../components/Sidebar.vue';
    import UserTable from '../../components/user/UserTable.vue';
    import Breadcrumb  from '../../components/Breadcrumb.vue';
</script>

<template>
    <Navbar/>
    <Sidebar/>
        <Breadcrumb>
            <template #breadcrumb-first>
                Users
            </template>
        </Breadcrumb>
    <UserTable/>
</template>