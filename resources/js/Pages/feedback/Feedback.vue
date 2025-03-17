<script setup>
import Header from '../../Layouts/Header.vue';
import Content from '../../components/Content.vue';
</script>

<template>
    <Header/>
    <Head title="Feedback"/>
    <Transition name="slide-fade">
        <Content>
            <template #content-title>
                Feedback
            </template>
        </Content>
    </Transition>

</template>