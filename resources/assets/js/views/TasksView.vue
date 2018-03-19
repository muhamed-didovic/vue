<template>
    <div>
        <ul>
            <task v-for="(task, index) in tasks" :key="task.index">{{task.desc}}</task>
        </ul>
        <h2>All tasks</h2>
        <ul>
            <li v-for="(task,index) in tasks">
                <!--v-show="task.completed !== true" -->
                <!--@click="toggleTask(task)"--> <!--v-text="task.desc"-->

                <input type="checkbox"
                       :id="'incompleted-task-id-' + index "
                       v-model="task.completed">
                <label :for="'incompleted-task-id-' + index ">{{task.desc}}</label>
                <div class="btn-group pull-right">
                    <!--
                    <button class="btn btn-success btn-xs" @click="editTaskIndex = index"><i class="fa fa-pencil"
                                                                                             aria-hidden="true"></i>
                    </button>
                    -->
                    <button class="btn btn-danger btn-xs" @click="dt(index)">delete {{index}}</button>
                </div>
            </li>
            <!--v-if="task.completed" -->
        </ul>

        <h2>Complete tasks</h2>
        <ul>
            <li v-for="task in completeTasks" v-text="task.desc" @click="toggleTask(task)"></li>
        </ul>

        <h2>Incomplete tasks</h2>
        <ul>
            <li v-for="task in incompleteTasks" v-text="task.desc" @click="toggleTask(task)"></li>
        </ul>

        <hr>
        Reverser message:
        {{reversedMessage}}
        <ul>
            <li v-for="name in names">{{name}}</li>
        </ul>

        <p>OR</p>

        <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul>

        <input type="text" v-model="newName">

        <!--<button v-on:click="addName">Add name</button>-->


        <!--2nd way to register events-->
        <!--also there is attribute binding with 'v-bind:' or shorthand with ':', in this case we bind it to title property-->
        <button id="button" @click="addName" :title="title" :class="{ 'btn btn-primary': apply }">
            Add name
        </button>
    </div>
</template>

<script>
    export default {
        name: "TaskListView",
        components: {
            task: require('../components/Task')
        },
        data() {
            return {
                color: 'btn btn-primary',
                apply: false,

                //message: '--this is a message--',
                newName: '',
                names: ['1', 'test2', 'test3'],
                tasks: [
                    {'desc': '1111', completed: true},
                    {'desc': '222', completed: false},
                    {'desc': '333', completed: true},
                    {'desc': '444', completed: false},
                    {'desc': '55555', completed: true},
                ]
            }
        },
        // Computed properties are properties that need to be processed or computed for some reason
        computed: {
            // reversedMessage() {
            //     return this.message.split('').reverse().join('');
            // },
            completeTasks() {
                return this.tasks.filter(task => task.completed)
            },
            incompleteTasks() {
                return this.tasks.filter(task => !task.completed)
            },

        },
        methods: {

            addName() {
                console.log('button', button);
                //this.disabledState = ! this.disabledState;

                //prevent adding of new name if empty
                if (!this.newName) {
                    return;
                }
                this.apply = true;
                //everything will be proxied to 'this' from 'data' object
                this.names.push(this.newName);

                //remove text from input
                this.newName = '';
                //this.apply = false;
            },
            toggleTask(task) {
                console.log('test', task);
                task.completed = !task.completed
            },
            dt(index) {
                this.tasks.splice(index, 1);
                alert('Task deleted');
            }
        },
    }
    //app.names.push('new test');
</script>

<style scoped>

</style>