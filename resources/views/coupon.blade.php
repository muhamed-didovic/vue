@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Coupon</div>

                    <div class="card-body">
                        {{--1st way, without Event object or Vue instance--}}
                        {{--<Coupon @applied="onCouponApplied"></Coupon>--}}

                        {{--2nd way, with Event object--}}
                        <Coupon></Coupon>

                        <h1 v-if="couponIsApplied"> Was applied</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
