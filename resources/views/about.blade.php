@extends('layouts.app')

@section('title', 'about')

@section('content')
    @include('components.navbar')
    <div class="container">

        <div class="row">
            <div class="col-4">
                <img src="{{ asset('/images/hiromi.png') }}" alt="hiromi" class="img-fluid mt-5 pt-5 rounded-circle">
            </div>
            <div class="col-8">
                <h1 class="d-flex justify-content-center biz-udpgothic-regular mt-3">About Me</h1>
                <p class="fw-bold biz-udpgothic-regular ">I am Hiromi Okajima!
                    <br>With a background in customer service and video editing, I am now looking to transition into the IT
                    industry.
                    <br>
                    I am currently studying to become a full-stack engineer, focusing on front-end and back-end development
                    using HTML, CSS, PHP, and Laravel.
                    <br>
                    Leveraging my experience in customer relations and my growing knowledge of technology, I am dedicated to
                    solving problems and providing exceptional user experiences.
                    <br>
                    I am eager to continue working on innovative projects that can make a positive impact on society.
                    <br>
                    Thank you for reading!
                </p>
                <p class="biz-udpgothic-regular">
                    岡島優美と申します。
                    <br>これまで接客業や動画編集での経験を経て、IT業界へとキャリアチェンジをしたいと思っています!
                    <br>
                    現在はフルスタッフエンジニアを目指して
                    HTML、CSS、PHP、Laravelを基礎としたフロントエンドおよびバックエンドの開発を勉強中です。
                    <br>
                    顧客対応で培った経験と、テクノロジーに関する知識を活かして、問題解決を図るとともに、優れたユーザー体験を提供していけるITエンジニアになりたいと思っています。
                    <br>今後も、社会に貢献できるような革新的なプロジェクトに携わっていきたいです！
                </p>
            </div>
        </div>
    </div>

@endsection
