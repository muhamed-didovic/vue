<template>
    <div>
        <h3>Todo List</h3>

        <div class="row">
            <div class="input-field col s6">
                <input id="new-task" v-model="newTask">
                <label class="active" for="new-task">New Task </label>
            </div>
            <button class="btn btn-large" @click="addNewTask">Add!</button>
        </div>

        <div class="card-panel">
            <template v-for="(task, index) in tasks">
                <p>
                    <input name="group1" type="checkbox" :id="'radio'+index" v-model="task.completed"/>
                    <label :for="'radio'+index">{{ task.description }}</label>
                </p>
            </template>
        </div>

        <div v-show="completedTasks.length">
            <hr>
            <h3>Done</h3>
            <ul>
                <li>
                    <div class="card-panel teal lighten-3">
                        <p v-for="task in completedTasks">
                            {{ task.description }}
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Todo",
        data() {
            return {
                tasks: [
                    {description: "checking my email", completed: true},
                    {description: "call my friend", completed: false},
                    {description: "have lunch with mom", completed: false},
                    {description: "read new article", completed: false},
                    {description: "watch new episode", completed: false},
                ],
                newTask: ""
            }

        },
        computed: {
            completedTasks: function(){
                return this.tasks.filter(task => task.completed)
            }
        },
        methods: {
            addNewTask: function() {
                let value = this.newTask;
                if(!value){
                    return;
                };
                this.tasks.push({
                    description: value,
                    completed: false
                });
                this.newTask = '';
            }
        }
    }
</script>

<!--<style src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" scoped></style>-->
<style scoped>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css');
</style>