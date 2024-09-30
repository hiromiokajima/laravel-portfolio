@extends('layouts.app')

@section('title', 'articles')

@section('content')
    @include('components.navbar')
    <div class="container">

        <div class="row">
            <div class="col d-flex justify-content-center biz-udpgothic-regular mt-3">
                <p class="col-7 my-5">I developed an application called <span class="fw-bold text-danger">"omotenaship"
                    </span>
                    <br>to promote local tourist destinations in Japan and address the issue of overtourism.
                    <br>
                    <a
                        href="https://docs.google.com/presentation/d/18SDvETX1Z9ZA1iOudptLpPlnHu_iuJ__9iASGdNW4l4/edit?usp=sharing">-
                        omotenaship presentation</a>
                    <br>
                    <a
                        href="https://lucid.app/lucidchart/3cc53dc3-74ff-4193-a4d1-c4c145c7ece8/edit?viewport_loc=-937%2C-631%2C2970%2C2098%2C0_0&invitationId=inv_692fe992-d23c-461f-a0ff-8ccb1d470567">-
                        ERD omotenaship</a>
                    <br>
                    <a
                        href="https://lucid.app/lucidchart/69eea718-c275-4e5b-89b6-57450ccebd10/edit?viewport_loc=-331%2C43%2C1499%2C1059%2C.Q4MUjXso07N&invitationId=inv_968c629b-f6c2-4e83-93ad-59bbec43c290">-
                        Use case diagram omotenaship</a>
                    <br>
                    <a
                        href="https://www.figma.com/design/oJSXGAPwgFPIb6ewuZc1gU/Omotenaship-(23rd-Batch-A)?node-id=0-1&node-type=canvas">-
                        figma omotenaship design</a>
                    <br>
                    <a href="https://github.com/hiromiokajima/omotenaship">- github</a>
                    <br>
                    <br>
                    <br>
                    <a href="https://omotenaship.com/">omotenaship.com(The application is already deployed on AWS)</a>
                </p>
                <img src="{{ asset('/images/omotenaship.png') }}" alt="omotenaship" class="col-5">
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center biz-udpgothic-regular mt-5">
                <img src="{{ asset('/images/laravel-insta.png') }}" alt="laravel-insta" class="col-5 ms-5">
                <a href="https://insta-app-hiromi-b9678a6db7a1.herokuapp.com/"
                    class="col-7 d-flex align-items-center justify-content-center "> Laravel-insta (The application is
                    already deployed on Heroku)<a>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start biz-udpgothic-regular mt-5">
                <p class="border border-info">Please feel free to use this sample
                    account.↓↓↓
                    <br>
                    omotenaship & laravel-insta
                    <br>
                    username:user01(omotenaship)
                    <br>
                    email:user01@sample.com
                    <br>
                    password:11111111

                </p>
            </div>
        </div>
    </div>

@endsection
