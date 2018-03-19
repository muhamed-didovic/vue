<template>
    <div class="col">
        <button class="btn btn-primary" @click="showNamedSlot = true">New Post</button>

        <named-slot :show="showNamedSlot"
                    @close="showNamedSlot = false">

            <h3 slot="header">New Post</h3>
            <template slot="modal-content">
                <label class="form-label">
                    Title
                    <input v-model="title" class="form-control">
                </label>
                <label class="form-label">
                    Body
                    <textarea v-model="body" rows="5" class="form-control"></textarea>
                </label>
            </template>
            <template slot="footer">
                <button class="modal-default-button" @click="savePost()">
                    Save
                </button>
            </template>
        </named-slot>

    </div>
</template>

<script>
    export default {
        name: "NamedSlotView",
        components: {
            'NamedSlot': require('../components/NamedSlot')
        },
        data() {
            //modal related code
            return {
                title: '',
                body: '',
                showNewPostModal: false,
                showNewCommentModal: false,
                showNamedSlot: false,
                showModal: false,
            }
        },
        methods: {
            close: function () {
                console.log('named 1');
                this.$emit('close');
                this.title = '';
                this.body = '';
            },
            savePost: function () {
                console.log('named 2');
                // Some save logic goes here...
                this.close();
            }
        }
    }
</script>

<style scoped>

</style>