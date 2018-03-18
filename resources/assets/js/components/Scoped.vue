<template>
    <div class="box">
        <article class="message is-primary">
            <div class="message-body">
                <ul claass="list-group">
                    <li class="list-group-item" v-for="item in items">
                        <slot :item="item" thing="thing" bar="baz">DEFAULT</slot>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</template>

<script>

    export default {
        props: ['items']
    }
</script>
