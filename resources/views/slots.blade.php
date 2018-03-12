@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modal</div>

                    <div class="card-body">

                        <div class="col">
                            <button class="btn btn-primary" @click="showNamedSlot = true">New Post</button>

                            <named-slot :show="showNamedSlot"
                                            @close="showNamedSlot = false">

                                <h3 slot="header">New Post</h3>
                                <template slot="modal-content">
                                    <label class="form-label">
                                        Title
                                        <input v-model="title" class="form-control">
                                    </label>
                                    <label class="form-label">
                                        Body
                                        <textarea v-model="body" rows="5" class="form-control">
                                        </textarea>
                                    </label>
                                </template>
                                <template slot="footer">
                                    <button class="modal-default-button" @click="savePost()">
                                        Save
                                    </button>
                                </template>

                            </named-slot>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection