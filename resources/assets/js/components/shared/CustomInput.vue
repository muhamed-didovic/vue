<template>
    <div class="box">
        <article class="message is-primary">
            <div class="message-body">
                <input type="text" class="input is-primary" :value="code" @input="updateCode($event.target.value)" ref="input">
            </div>
        </article>
    </div>
</template>

<script>

    export default {
        props: ['code'],
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
