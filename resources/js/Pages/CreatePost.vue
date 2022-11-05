<template>
    <div>
        <form @submit.prevent="onSubmit">
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.name"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.email"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.phone"/>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="save"/>
            </div>
        </form>
    </div>
</template>

<script>
    import {Inertia} from '@inertiajs/inertia';
    export default {
        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    phone: null
                }
            }
        },
        props: {
            posts_store: {
                type: String,
                required: true
            }
        },

        methods: {
            onSubmit() {
                Inertia.post('/posts', this.form);
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>