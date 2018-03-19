<template>
    <table class="table">
        <tr>
            <th>Component 1</th>
            <th>Component 2</th>
        </tr>
        <tr>
            <td>
                <shared-one></shared-one>
            </td>
            <td>
                <shared-two></shared-two>
            </td>
        </tr>
    </table>
</template>

<script>
    export default {
        name: "SharedView",
        components: {
            //Sharing state
           'shared-one': require('../components/shared/SharedOne'),
           'shared-two': require('../components/shared/SharedTwo'),
        }
    }
</script>

<style scoped>

</style>