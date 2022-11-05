<template>
    <Layout>
        <Head title="Welcome"/>
        <ul>
            <li v-for="post in posts" :key="post.id">
                <span>{{ post.title }}</span>
            </li>
        </ul>
    </Layout>
</template>

<script>
    import Layout from './Layout';
    import { Head } from '@inertiajs/inertia-vue3';
    export default {
        components: {
            Head,
            Layout        
        },

        layout: Layout,
        props: {
            posts: {
                type: Object,
                required: true
            },
            twitter_title: {
                type: String,
                required: true
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>