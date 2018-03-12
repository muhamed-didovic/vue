@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modal</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div id="root" class="col">
                            <alert v-if="showModal" @close="showModal = false">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            </alert>

                            <button class="btn btn-primary" @click="showModal = true">Show alerts</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" @click="showNewPostModal = true">New Post</button>
                            <button class="btn btn-primary" @click="showNewCommentModal = true">Add Comment</button>
                            <new-post-modal :show="showNewPostModal" @close="showNewPostModal = false"></new-post-modal>
                            <new-comment-modal :show="showNewCommentModal"
                                               @close="showNewCommentModal = false"></new-comment-modal>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
