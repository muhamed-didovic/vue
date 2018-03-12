@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                        <task-list></task-list>

                        <h2>All tasks</h2>
                        <ul>
                            <li v-for="(task,index) in tasks"
                                    {{--v-show="task.completed !== true"--}}
                            > {{--@click="toggleTask(task)"--}} {{--v-text="task.desc"--}}
                                <input type="checkbox"
                                       :id="'incompleted-task-id-' + index "
                                       v-model="task.completed">
                                <label :for="'incompleted-task-id-' + index ">@{{task.desc}}</label>
                                <div class="btn-group pull-right">
                                    {{--<button class="btn btn-success btn-xs" @click="editTaskIndex = index"><i class="fa fa-pencil" aria-hidden="true"></i></button>--}}
                                    <button class="btn btn-danger btn-xs" @click="dt(index)">delete @{{index}}</button>
                                </div>
                            </li> {{-- v-if="task.completed" --}}
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
                        {{--@{{reversedMessage}}--}}
                        <ul>
                            <li v-for="name in names">@{{name}}</li>
                        </ul>

                        <p>OR</p>

                        <ul>
                            <li v-for="name in names" v-text="name"></li>
                        </ul>

                        <input type="text" v-model="newName">
                        {{--<button v-on:click="addName">Add name</button>--}}

                        {{--2nd way to register events--}}
                        {{--also there is attribute binding with 'v-bind:' or shorthand with ':', in this case we bind it to title property--}}
                        <button id="button" @click="addName" :title="title" :class="{ 'btn btn-primary': apply }">
                            Add name
                        </button>
                </div>
            </div>
        </div>
    </div>

</div>
<example-component title="Example Component from props" message="I'm an example component from props!!!"></example-component>
@endsection
