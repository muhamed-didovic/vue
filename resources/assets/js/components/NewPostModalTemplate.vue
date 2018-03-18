<template>
    <modal :show="show" @close="close">
        <div class="modal-header">
            <h3>New Post</h3>
        </div>
        <div class="modal-body">
            <label class="form-label">
                Title
                <input v-model="title" class="form-control">
            </label>
            <label class="form-label">
                Body
                <textarea v-model="body" rows="5" class="form-control">
                </textarea>
            </label>
        </div>
        <div class="modal-footer text-right">
            <button class="modal-default-button" @click="savePost()">
                Save
            </button>
        </div>
    </modal>
</template>

<script>
    export default {

        props: ['show'],
        data: function () {
            return {
                title: '',
                body: ''
            };
        },
        components: {
          modal: require('../components/Modal')
        },
        methods: {
            close: function () {
                this.$emit('close');
                this.title = '';
                this.body = '';
            },
            savePost: function () {
                // Some save logic goes here...
                this.close();
            }
        }
    }

</script>

<!-- Template for the NewPostModal component -->
<!--<script type="x/template" id="new-post-modal-template">-->
    <!--<div class="modal-mask" @click="close" v-show="show">-->
        <!--<div class="modal-container" @click.stop>-->
            <!--<div class="modal-header">-->
                <!--<h3>New Post <slot></slot></h3>-->
            <!--</div>-->
            <!--<div class="modal-body">-->
                <!--<label class="form-label">-->
                    <!--Title-->
                    <!--<input class="form-control" v-model="title">-->
                <!--</label>-->
                <!--<label class="form-label">-->
                    <!--Body-->
                    <!--<textarea v-model="body" rows="5" class="form-control"></textarea>-->
                <!--</label>-->
            <!--</div>-->
            <!--<div class="modal-footer text-right">-->
                <!--<button class="modal-default-button" @click="savePost()">-->
                    <!--Save-->
                <!--</button>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</script>-->

<!-- template for the NewPostModal component -->
<!--<script type="x/template" id="new-post-modal-template">-->
    <!--<modal :show="show" @close="close">-->
        <!--<div class="modal-header">-->
            <!--<h3>New Post</h3>-->
        <!--</div>-->
        <!--<div class="modal-body">-->
            <!--<label class="form-label">-->
                <!--Title-->
                <!--<input v-model="title" class="form-control">-->
            <!--</label>-->
            <!--<label class="form-label">-->
                <!--Body-->
                <!--<textarea v-model="body" rows="5" class="form-control">-->
                <!--</textarea>-->
            <!--</label>-->
        <!--</div>-->
        <!--<div class="modal-footer text-right">-->
            <!--<button class="modal-default-button" @click="savePost()">-->
                <!--Save-->
            <!--</button>-->
        <!--</div>-->
    <!--</modal>-->
<!--</script>-->