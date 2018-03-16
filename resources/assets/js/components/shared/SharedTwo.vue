<template>
    <div class="box">
        <h6>Private count: {{private.count}}</h6>
        <p>Shared count: {{shared.count}}</p>
        <p>Increment simple shared: {{inc}}</p>
        <p>Increment {{o.inc}}</p>
        <button class="button" @click="private.count++">Private Increment</button>
        <button class="button" @click="shared.count++">Shared Increment</button>
        <button class="button" @click="inc++">Increment simple shared</button>
        <button class="button" @click="o.inc++">Increment</button>
    </div>
</template>

<script>
    import shared from '../../state/shared';

    export default {
        data() {
            console.log('2', shared);
            return {
                private: {
                    count: 0
                },
                shared: shared.state,
                inc: shared.inc,
                o: shared.o
            }
        },
    }
</script>
