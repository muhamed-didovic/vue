@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tabs</div>

                    <div class="card-body">
                        <tabs>
                            <tab name="About Us" :selected="true">
                                <h1>Here is the content for the about us tabssssss.</h1>
                            </tab>

                            <tab name="About Our Culture">
                                <h1>Here is the content for the about our culture tab.</h1>
                            </tab>

                            <tab name="About Our Vision">
                                <h1>Here is the content for the about our vision tab.</h1>
                            </tab>
                        </tabs>

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#currentPreferences">Current Preferences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#alternative"> Alternative </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#link">Link</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="currentPreferences">
                                <ul class="list-group media-list media-list-stream">
                                    <p>Pref</p>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="alternative">
                                <ul class="list-group media-list media-list-stream">
                                    <p>Test</p>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="link">
                                <ul class="list-group media-list media-list-stream">
                                    <p>Link</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
