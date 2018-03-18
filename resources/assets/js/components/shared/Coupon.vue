<template>
    <input type="text"
           :value="code"
           @input="updateCode($event.target.value)"
           ref="input">
</template>

<script>
    export default {
        name: "Coupon",
        props: ['code'],
        methods: {
            updateCode(code) {
                // Atttach validation + sanitization here.

                this.$emit('input', code);
            }
        }
    }
</script>

<style scoped>

</style>