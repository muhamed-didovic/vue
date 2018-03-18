@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Custom inputs with v-model directive:</div>

                    <div class="card-body">
                        {{--OLD WAY--}}
                        <custom-old-way-input v-model="coupon" :code="coupon"></custom-old-way-input>

                        {{--NEW WAY--}}
                        <custom-input v-model="coupon" :code="coupon"></custom-input>
                        <hr>
                        OTHER VARIATIONS: <br>
                        <coupon v-model="coupon"></coupon>
                        <coupon v-bind:code="coupon" v-on:input="coupon = arguments[0]"></coupon>
                        <coupon2 v-model="coupon2"></coupon2>
                        <coupon2 v-bind:value="coupon2" v-on:input="coupon2 = arguments[0]"></coupon2>
                        <hr>
                        TEMPVAR = @{{tempvar}}
                        <br>
                        With input & without props:
                        <child :value="tempvar"></child>
                        <br><br>
                        Without input & without props:
                        <child2 :value="tempvar"></child2>
                        <br><br>
                        Without input & with props:
                        <child3 :value="tempvar"></child3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
