<template>
    <input type="text" placeholder="Enter your coupon code" @blur="localCouponApplied">
</template>

<script>
    export default {
        name: "Coupon",
        data() {
            return {

            }
        },
        methods: {
            localCouponApplied() {
                // this example is related how to handle communication between
                // components, it this particular example there is coupon component
                // and global or root Vue instance, in this example we send from
                // coupon component event (emit event) to global Vue instance
                // - this is from laracasts vue2 lesson number 12

                // The child component that emits the event has its own method that uses this.$emit().
                // And the parent uses v-on:your-event-name="someMethod",
                // which points to the someMethod method in the parent.

                alert('local notification');
                //1st way
                //this.$emit('applied');

                //2nd way
                EventBus.$emit('applied')
            }
        }
    }
</script>

<style scoped>

</style>