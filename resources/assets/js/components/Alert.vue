<template>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <slot></slot>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" 							@click="$emit('close')"><span aria-hidden="true">&times;</span></button>
    </div>
</template>

<script>
    export default {
        name: "alert"
    }
</script>

<style scoped>

</style>