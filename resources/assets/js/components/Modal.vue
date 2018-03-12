<template>
    <transition name="modal">
        <div class="modal-mask" @click="close" v-show="show">
            <div class="modal-container" @click.stop>
                <slot></slot>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {

        //template: '#modal-template',
        props: ['show'],
        methods: {
            close: function () {
                this.$emit('close');
            }
        },
        mounted: function () {
            document.addEventListener("keydown", (e) => {
                if (this.show && e.keyCode === 27) {
                    this.close();
                }
            });
        }
    }

</script>

<!-- template for the modal component -->
<!--<script type="x/template" id="modal-template">-->
    <!--<transition name="modal">-->
        <!--<div class="modal-mask" @click="close" v-show="show">-->
            <!--<div class="modal-container" @click.stop>-->
                <!--<slot></slot>-->
            <!--</div>-->
        <!--</div>-->
    <!--</transition>-->
<!--</script>-->