<template>
    <modal :show="show" @close="close">
        <div class="modal-header">
            <h3>New Comment</h3>
        </div>
        <div class="modal-body">
            <label class="form-label">
                Comment
                <textarea v-model="comment" rows="5" class="form-control">
                </textarea>
            </label>
        </div>
        <div class="modal-footer text-right">
            <button class="modal-default-button" @click="postComment()">
                Post
            </button>
        </div>
    </modal>
</template>

<script>
    export default {
        name: "NewCommentModalTemplate",
        props: ['show'],
        data: function () {
            return {
                comment: ''
            };
        },
        methods: {
            close: function () {
                this.$emit('close');
                this.comment = '';
            },
            postComment: function () {
                // Some save logic goes here...
                this.close();
            }
        }
    }
</script>

<style scoped>

</style>

<!-- template for the NewCommentModal component -->
<!--<script type="x/template" id="new-comment-modal-template">-->
    <!--<modal :show="show" @close="close">-->
        <!--<div class="modal-header">-->
            <!--<h3>New Comment</h3>-->
        <!--</div>-->
        <!--<div class="modal-body">-->
            <!--<label class="form-label">-->
                <!--Comment-->
                <!--<textarea v-model="comment" rows="5" class="form-control">-->
                <!--</textarea>-->
            <!--</label>-->
        <!--</div>-->
        <!--<div class="modal-footer text-right">-->
            <!--<button class="modal-default-button" @click="savePost()">-->
                <!--Post-->
            <!--</button>-->
        <!--</div>-->
    <!--</modal>-->
<!--</script>-->