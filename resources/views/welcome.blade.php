@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs d-lg-flex" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ALL</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">WallPapper</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ringtone</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel"
            aria-labelledby="home-tab" tabindex="0">
            <div id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">

                        @foreach($results as $data)
                            @if($data->type == 1)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <div class="card wallpp">
                                    <img src="{{$data->file_path}}" class="img">
                                    <p class="txt">{{$data->name}}</p>
                                </div>
                            </div>
                            @else
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <div class="card position-relative">
                                    <div class="wallpp">
                                    <img src="{{$data->file_path}}" class="img">
                                    <i class="bi bi-play-circle btn-play"></i>
                                    <p class="txt">{{$data->name}}</p>
                                    </div>
                                    <div class="backg"></div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
            tabindex="0">
            <h2 class="accordion-header " id="headingTwo">
                <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button> -->
            </h2>
            <div id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                    @foreach($resultw as $data)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card wallpp">
                                <img src="{{$data->file_path}}" class="img">
                                <p class="txt">{{$data->name}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade accordion-item" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
            tabindex="0">
            <h2 class="accordion-header " id="headingThree">
                <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button> -->
            </h2>
            <div id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                    @foreach($resultr as $data)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card wallpp">
                                <img src="{{$data->file_path}}" class="img">
                                <i class="bi bi-play-circle btn-play"></i>
                                <p class="txt">{{$data->name}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
