<template>
    <example-component title="Example Component from props" message="I'm an example component from props!!!"></example-component>
</template>

<script>
    export default {
        name: "ExampleView",
        components: {
            ExampleComponent: require('../components/ExampleComponent')

        }
    }
</script>

<style scoped>

</style>