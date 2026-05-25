@extends('partials.app')
@section('title', 'Home')
@section('content')

<section class="hero_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="hero_box">
                    <h1>{{$hero->title}}</h1>
                    {!! $hero->content !!}
                    <div class="start_your_journey">
                        <a href="#" class="start_your">Start Your Journey</a>
                        <a href="#" class="getfree_tuch">Get Free Quote</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="heroimg_title">
                    <img src="{{ asset('/uploads/hero_section/'.$hero->image) }}" width="100%"
                        alt="heroimg.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="step_process_sec">
    <div class="container">
        <div class="simple_procese_text">
            <h2> Features</h2>
        </div>
        <div class="row">
            @foreach($steps as $step)
                <div class="col-6 ">
                    
                    <div class="feature_itemsdr">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>{{$step->title}}</span>
                    </div>
                </div>
            @endforeach

    </div>
    </div>

</section>

<section class="academic_services_section">
    <div class="container">
        <div class="simple_procese_text mb-4">
            <h2> How It Works
            </h2>
        </div>
        <div class="row">

            <div class="col-4">
                <div class="process_boxsest">
                    <div class="process_icon">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>

                    <h3>Upload Your <br> Assignment Brief</h3>
                </div>
            </div>

            <div class="col-4">
                <div class="process_boxsest">
                    <div class="process_icon">
                        <i class="fa-solid fa-list-check"></i>
                    </div>

                    <h3>Get a Quote <br> & Approve</h3>
                </div>
            </div>
            <div class="col-4">
                <div class="process_boxsest regular_box">
                    <div class="process_icon">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <h3>Receive Work <br> by Deadline</h3>
                </div>
            </div>
        </div>

        <div class="pyble-se">
            <p>"Rymble helped me grafnish my dissertation 2 weeks early!" – Priya</p>
        </div>

    </div>
</section>

@endsection
