<template>
    <scoped-slot :items="['one','two','three']">
        <template slot-scope="props">
            <h4 v-text="props.bar"></h4>
            <p v-text="props.item"></p>
        </template>
    </scoped-slot>
</template>

<script>
    export default {
        name: "ScopedSlotView",
        components: {
            'scoped-slot': require('../components/Scoped')
        }
    }
</script>

<style scoped>

</style>