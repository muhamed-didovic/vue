@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Projects:</div>

                    <div class="card-body">
                        @include ('projects.list')

                        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
                            @csrf
                            <div class="control">
                                <label for="name" class="label">Project Name:</label>

                                <input type="text" id="name" name="name" class="input" v-model="form.name">

                                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                            </div>

                            <div class="control">
                                <label for="description" class="label">Project Description:</label>

                                <input type="text" id="description" name="description" class="input" v-model="form.description">

                                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
                            </div>

                            <div class="control">
                                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
