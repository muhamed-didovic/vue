<template>
    <div>
        <div id="root" class="col">
            <alert v-if="showModal" @close="showModal = false">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            </alert>

            <button class="btn btn-primary" @click="showModal = true">Show alerts</button>
        </div>
        <div class="col">
            <button class="btn btn-primary" @click="showNewPostModal = true">New Post</button>
            <button class="btn btn-primary" @click="showNewCommentModal = true">Add Comment</button>
            <new-post-modal :show="showNewPostModal"
                            @close="showNewPostModal = false"></new-post-modal>
            <new-comment-modal :show="showNewCommentModal"
                               @close="showNewCommentModal = false"></new-comment-modal>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ModalView",
        data() {
            //modal related code
            return {
                showNewPostModal: false,
                showNewCommentModal: false,
                showNamedSlot: false,
                showModal: false,
            }
        },
        components: {
            'alert': require('../components/Alert'),
            'NewPostModal': require('../components/NewPostModalTemplate'),
            'NewCommentModal': require('../components/NewCommentModalTemplate')
        }
    }
</script>

<style scoped>

</style>