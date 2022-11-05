<template>
    <main>
        <header>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/faq">FAQ's</Link>
        </header>
        <article>
            <slot />
        </article>
  </main>
</template>

<script>
    import {Link} from '@inertiajs/inertia-vue3';
    export default {        
        components: {
            Link
        }
    }
</script>

<style lang="scss" scoped>

</style>