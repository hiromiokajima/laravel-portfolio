@extends('layouts.app')

@section('title', 'skill')

@section('content')
    @include('components.navbar')
    <div class="container">

        <div class="row mt-5">
            <div class="col d-flex justify-content-center biz-udpgothic-regular mt-3">
                <h1>Acquired Knowledge, Skills, and Techniques</h1>
            </div>
        </div>
        <div class="row d-flex align-items-center mt-5 pt-5">
            <div class="col-4 mt-3 biz-udpgothic-regular">

                <h3>Programming Fundamentals</h3>

                <p>
                    • Frontend | HTML, CSS, Bootstrap
                    <i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3-alt"></i>
                    <i class="fa-brands fa-bootstrap"></i>
                    <br>
                    • Backend | PHP (Laravel)
                    <i class="fa-brands fa-php"></i>
                    <i class="fa-brands fa-laravel"></i>
                    <br>
                    • Database | MySQL
                    <br>
                    • Version Control | Git
                    <br>
                    • Cloud | Heroku, AWS
                    <i class="fa-brands fa-aws"></i>
                    <br>
                    • Others | Object-Oriented Programming
                </p>
            </div>

            <div class="col-4 biz-udpgothic-regular mt-3">
                <h3>Documentation Creation</h3>
                <p>
                    <br>
                    • Requirements Definition
                    <br>
                    • Screen Transition Diagrams
                    <br>
                    • Function List
                    <br>
                    • ER Diagrams
                    <br>
                    • Testing
                    <br>
                </p>
            </div>
            <div class="col-4 biz-udpgothic-regular mt-3">
                <h3>Practical Application Development</h3>

                <p>
                    • Implementation of Asynchronous Processing (Async, Await)
                    <br>
                    • Code Management Using npm
                    <br>
                    • Frontend Development Using bind, method, etc.
                    <br>
                    • API Integration with SpreadSheet, etc.
                    <br>
                    • Code Management Using GitHub
                    <br>
                    • Deployment to Production Environments Using Heroku and AWS

                </p>
            </div>
        </div>
    </div>
    </div>

@endsection
