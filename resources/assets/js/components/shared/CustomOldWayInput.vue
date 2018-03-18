<template>
    <div class="box">
        <article class="message is-primary">
            <div class="message-body">
                <!--OLD way-->
                <input type="text" class="input is-primary" :value="code" @input="updateCode($event.target.value)" ref="input">

            </div>
        </article>
    </div>
</template>

<script>

    export default {

        //in order to work for old way
        props: ['code'],
        model: {
            prop: 'code',
            event: 'input'
        },

        data(){
            return {
                invalids: ['ALLFREE','YES']
            }
        },
        methods: {
            updateCode(code){
                if(this.invalids.includes(code)){
                    alert('sorry that coupon has expried!');

                    this.$refs.input.value = code = '';
                }

                this.$emit('input', code);
            }
        }
    }
</script>
