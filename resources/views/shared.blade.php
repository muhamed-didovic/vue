@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Shared state:</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Component 1</th>
                                <th>Component 2</th>
                            </tr>
                            <tr>
                                <td>
                                    <shared-one></shared-one>
                                </td>
                                <td>
                                    <shared-two></shared-two>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
