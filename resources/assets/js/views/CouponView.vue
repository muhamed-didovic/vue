<template>
    <div>
    <!--1st way, without Event object or Vue instance-->
    <!--<Coupon @applied="onCouponApplied"></Coupon>-->

    <!--2nd way, with Event object-->
    <Coupon></Coupon>

    <h1 v-if="couponIsApplied"> Was applied</h1>
    </div>
</template>

<script>
    export default {
        name: "CouponView",
        components: {
            'Coupon': require('../components/Coupon')
        },
        data() {
            return {
                //coupon related
                couponIsApplied: false
            }
        },
        methods: {

            //1st way, without Event object
            onCouponApplied() {
                this.couponIsApplied = true;
                alert('Global notification, coupon was applied');
            }
        },
        created() {
            //2nd way over Event object
            EventBus.$on('applied', () => {
                alert('Global notification, coupon was applied over Event object');
                this.couponIsApplied = true;
            });

        },
    }
</script>

<style scoped>

</style>