<template>
    <div class="message">
        <div class="message-header">
           add to stream
        </div>
        <div class="message-body">
            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <p class="control">
                    <textarea class="textarea" placeholder="I have something to say..." v-model="form.body"></textarea>
                    <span class="help is-danger"
                          v-if="form.errors.has('body')"
                          v-text="form.errors.get('body')"></span>
                </p>

                <p class="control">
                    <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
                </p>
            </form>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Stream",
        data() {
            return {
                form: new Form({body: ''})
            };
        },
        methods: {
            onSubmit() {
                this.form
                    .post('/statuses')
                    .then(status => this.$emit('completed', status));
            }
        },
        // computed: {
        //     stats(){
        //         let s = axios
        //             .get('/statuses')
        //             .then(response => response.statuses );
        //         console.log('aa', s);
        //         return this.stauses = s;
        //     }
        // }
    }

</script>

<style scoped>

</style>