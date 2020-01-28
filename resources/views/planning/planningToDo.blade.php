@extends('layouts._template')
@section('indexPage')
  

    <div class="pln-hero-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1 class="hero-title">Checklist - To Do’s</h1>
                    <p class="hero-text">Planning your wedding is easy with suggested tasks to make your dream day come true! Create your own tasks, make notes and start today your to dos.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="intro-block">
                <div class="col-md-offset-1 col-md-10">
                    <div class=" "><img src="{{asset('template/images/hero-to-do.png')}}" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-block text-center ">
                        <h1>Start Planning Your Wedding Day</h1>
                        <p>Just Engaged - Start Your First Wedding Planning To Do, Budget, Checklist, Guest list, Favourite.</p>
                        <a href="{{route('login')}}" class="btn btn-primary mt20">Start Planning Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tools-descriptions text-center">
                        <div class="feature-icon"><i class="icon-add icon-size-60 icon-primary"></i></div>
                        <h1>Create Task &amp; 
          Manage To-Dos</h1>
                        <p>Get organized! Start with a checklist that's personalized based on your wedding date and check off items as you complete them.</p>
                        <a href="#" class="btn-link">Get Started </a>
                    </div>
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
                    <div class="tools-descriptions text-center pinside120">
                        <div class="feature-icon"><i class="icon-edit icon-size-60 icon-primary"></i></div>
                        <h1>Customize &amp; Arrange
          Your To-Dos</h1>
                        <p>Your wedding, your to-dos. Edit a task name, due date and notes to make it your own. Or easily add new items as you go to keep all of your wedding to-dos in one place! </p>
                        <a href="#" class="btn-link">Get Started </a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space bg-light section-space100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb60">
                        <div class="feature-icon"><i class="icon-bar-chart icon-size-60 icon-primary"></i></div>
                        <h1>Track &amp; Follow Your Progress</h1>
                        <p>Use the progress bar to stay on track, or peek ahead to quickly see what items need to be completed next.</p>
                    </div>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <div class="template-box"><img src="{{asset('template/images/to-do-app-screen.png')}}" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-block text-center section-space60">
                        <h1>Start Planning Your Wedding Day</h1>
                        <p>Just Engaged - Start Your First Wedding Planning To Do, Budget, Checklist, Guest list, Favourite.</p>
                        <a href="{{route('register')}}" class="btn btn-primary mt20">Start planning Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-6">
                    <div class="tool-description text-center">
                        <h1>Your To-Do List Anywhere</h1>
                        <p>Various versions have evolved over the years, sometimes by accident, simple dummy sometimes on purpose injected humour and the like.</p>
                        <a href="#"><img src="{{asset('template/images/button-app-store.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('template/images/button-google-play.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="app-mobile">
                        <img src="{{asset('template/images/app-screen.png')}}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection