<template>
    <transition name="modal">
        <div class="modal-mask" @click="close" v-show="show">
            <div class="modal-container" @click.stop>
                <template :show="show" @close="close">
                    <div class="modal-header">
                        <slot name="header">
                            Default header
                        </slot>
                    </div>
                    <div class="modal-body">
                        <slot name="modal-content"></slot>
                    </div>
                    <div class="modal-footer text-right" v-if="$slots.footer">
                        <slot name="footer"></slot>
                    </div>
                </template>
            </div>
        </div>
    </transition>

</template>

<script>
    export default {
        name: "NamedSlot",
        props: ['show'],
        methods: {
            close: function () {
                this.$emit('close');
            },
            savePost: function () {
                // Some save logic goes here...
                this.close();
            }
        },
        mounted() {
            document.addEventListener("keydown", (e) => {
                if (this.show && e.keyCode === 27) {
                    this.close();
                }
            });
        }
    }
</script>

<style scoped>

</style>