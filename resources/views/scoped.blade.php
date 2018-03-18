@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Custom inputs with v-model directive:</div>

                    <div class="card-body">
                        <scoped-slot :items="['one','two','three']">
                            <template slot-scope="props">
                                <h4 v-text="props.bar"></h4>
                                <p v-text="props.item"></p>
                            </template>
                        </scoped-slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
