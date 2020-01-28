@extends('layouts._template')
@section('indexPage')
  
    <div class="pln-hero-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1 class="hero-title">Budget Planning</h1>
                    <p class="hero-text">Planning your wedding is easy with suggested tasks to make your dream day come true! Create your own tasks, make notes and start today your to dos.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="intro-block">
                <div class="col-md-offset-2 col-md-8">
                    <div class="template-box"><img src="{{asset('template/images/budget-hero.png')}}" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h1>Start Planning Your Wedding Day</h1>
                        <p>Just Engaged - Start Your First Wedding Planning To Do, Budget, Checklist, Guest list, Favourite.</p>
                        <a href="{{route('register')}}" class="btn btn-primary mt20">Start planning Today</a> </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section-space100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="template-box"><img src="{{asset('template/images/to-do-app-screen.png')}}" alt="" class="img-responsive"></div>
                </div>
                <div class="col-md-6">
                    <div class="tools-descriptions">
                        <div class="feature-icon"><i class="icon icon-date icon-size-60 icon-primary"></i></div>
                        <h1>Make Your Wedding Budget</h1>
                        <p>Enter the amount you want to spend into the calculator to get your personalized wedding budget breakdown. </p>
                        <a href="#" class="btn-link">Get Started </a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tools-descriptions">
                        <div class="feature-icon"><i class="icon icon-budget icon-size-60 icon-primary"></i></div>
                        <h1>Cost Per Supplier</h1>
                        <p>You will know the detailed price of your suppliers You could also write down everything you like by using the nts and much more.</p>
                        <a href="#" class="btn-link">Get Started </a> </div>
                </div>
                <div class="col-md-6">
                    <div class="template-box"><img src="{{asset('template/images/to-do-app-screen.png')}}" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="template-box"><img src="{{asset('template/images/to-do-app-screen.png')}}" alt="" class="img-responsive"></div>
                </div>
                <div class="col-md-6">
                    <div class="tools-descriptions">
                        <div class="feature-icon"><i class="icon icon-wedding-planning icon-size-60 icon-primary"></i></div>
                        <h1>Manage Your Payment Sechdule</h1>
                        <p>You will know the detailed price of your suppliers you could also write down everything you like by using the nts and much more.</p>
                        <a href="#" class="btn-link">Get Started </a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-6">
                    <div class="tool-description pdt40">
                        <h1>Your To-Do List Anywhere</h1>
                        <p>Various versions have evolved over the years, sometimes by accident, simple dummy sometimes on purpose injected humour and the like.</p>
                        <a href="#"><img src="{{asset('template/images/button-app-store.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('template/images/button-google-play.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="app-mobile"> <img src="{{asset('template/images/app-screen.png')}}" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-block section-space60 text-center">
                        <h1>Start Planning Your Wedding Day</h1>
                        <p>Just Engaged - Start Your First Wedding Planning To Do, Budget, Checklist, Guest list, Favourite.</p>
                        <a href="{{route('register')}}" class="btn btn-primary mt20">Start planning Today</a> </div>
                </div>
            </div>
        </div>
    </div>

@endsection