@extends('layouts.app')

@section('title', 'skill')

@section('content')
    @include('components.navbar')
    <div class="container">

        <div class="row">
            <div class="col d-flex justify-content-center biz-udpgothic-regular mt-3">
                <i class="fa-regular fa-envelope fs-1 mt-5 pt-1"></i>
                <h1 class="ms-1 mt-5">Contact</h1>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center biz-udpgothic-regular mt-3">
                    <p>
                        I would be happy to hear from you, whether it's feedback, comments, or requests.
                        <br>
                        <span class="d-flex justify-content-center mt-5 fw-bold">abcn.15125@gmail.com</span>

                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection
