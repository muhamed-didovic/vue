<template>
    <div>
        <div class="message" v-for="status in statuses">

            <div class="message-header">
                <p>
                    <!--<pre>{{$data}}</pre>-->
                    {{ status.user.name ? status.user.name : 'nobody' }} said...
                </p>
                <p>
                    {{ status.created_at | ago | capitalize}}
                </p>
            </div>

            <div class="message-body" v-text="status.body"></div>
        </div>

        <stream @completed="addStatus"></stream>
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/Status';
    //import AddToStream from '../components/AddToStream.vue';
    export default {
        name: "StreamView",
        components: {
            'stream': require('../components/Stream')
        },
        data() {
            return {
                statuses: []
            }
        },
        filters: {
            ago(date) {
                return moment(date).fromNow();
            },
            capitalize(value) {
                return value.toUpperCase();
            }
        },
        created() {
            Status.all(statuses => this.statuses = statuses);
        },
        methods: {
            addStatus(status){
                this.statuses.unshift(status);
                alert('Your status has been added to the stream.');
                window.scrollTo(0, 0);
            }
        }
    }

</script>