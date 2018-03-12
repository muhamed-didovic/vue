@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modal</div>

                    <div class="card-body">

                        <div class="col">
                            <progress-view inline-template>
                                <div>
                                    Your progress is at @{{ completionRate }}%
                                    <button @click="completionRate += 10">Increase</button>
                                </div>
                            </progress-view>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection