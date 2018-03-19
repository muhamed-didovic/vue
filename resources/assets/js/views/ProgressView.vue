<template>
    <progress-view inline-template>
        <div>
            Your progress is at {{ completionRate }}%
            <button @click="completionRate += 10">Increase</button>
        </div>
    </progress-view>
</template>

<script>
    export default {
        name: "ProgressView",
        // components: {
        //     ProgressView: require('../components/ProgressView')
        // },
        data() {
            return {
                completionRate: 10
            }
        }
    }
</script>

<style scoped>

</style>