@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Projects:</div>

                    <div class="card-body">
                        @include ('projects.list')

                        <schema-forms  :schema="formSchema" :data="formData"></schema-forms>

                        <hr>
                        Form data:
                        <pre>@{{ formData }}</pre>{{-- | json--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
