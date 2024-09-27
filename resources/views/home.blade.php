@extends('layouts.app')

@section('title', 'home')

@section('content')
    <div class="container">
        <div class="row min-vh-100">
            <div class="col d-flex justify-content-center align-self-end">
                <h1 class="home biz-udpgothic-regular">Hiromi Okajima's Portfolio</h1>
            </div>
            <div class="row d-flex justify-content-center align-items-center category">
                @include('components.navbar')

            </div>
        </div>
    </div>
