<template>
    <input type="text"
           :value="value"
           @input="updateCode($event.target.value)"
           ref="input">
</template>

<script>
    export default {
        name: "Coupon2",
        props: ['value'],

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