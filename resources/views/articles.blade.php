@extends('layouts.app')

@section('title', 'articles')

@section('content')

    <div class="container">
        @include('components.navbar')
        <div class="row">
            <div class="col d-flex justify-content-center biz-udpgothic-regular mt-3">
                <p>I developed an application called <span class="fw-bold">"Omotenaship" </span>
                    <br>to promote local tourist destinations in Japan and address the issue of overtourism.
                    <br>
                    <a href="https://omotenaship.com">Omotenaship</a>
                    <span class="text-danger"> Please note that the app is not optimized for smartphones!</span>
                    <br>
                    I was responsible for database management using
                    <span class="fw-bold">MySQL</span>,
                    <br>
                    front-end design using<span class="fw-bold"> Figma</span>,
                    <br>
                    and implementing user registration and direct messaging function.
                    <a href="https://insta-app-hiromi-b9678a6db7a1.herokuapp.com/">This is Laravel-insta</a>
                </p>
                
            </div>
        </div>
    </div>

@endsection
