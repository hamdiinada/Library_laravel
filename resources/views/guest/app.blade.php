<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>

    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="Books, Crud App Books, Laravel">
    <meta name="author" content="Aymen Smida">


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
    body {
        background-color: #fffdfd;
    }

    .navbar {
        background-color: #70a90e;
        padding-bottom: 15px;
        padding-top: 15px;
    }

    .navbar .app-name {
        color: rgb(255, 255, 255);
        font-weight: bold;
        text-shadow: 0px 1px;
    }

    .navbar .app-name:hover {
        color: rgb(255, 255, 255);
        font-weight: bold;
        text-shadow: 0px 1px;
    }

    .navbar form {
        width: 50%;
        height: 35px;
        margin: auto;
        display: flex;
        flex-direction: row;
        background-color: rgb(255, 255, 255);
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;
    }

    .navbar form input {
        background-color: rgb(255, 255, 255);
        width: 60%;
        height: 100%;
        border: 2px solid rgb(255, 255, 255);
    }

    .navbar form select {
        background-color: rgb(255, 255, 255);
        width: 50%;
        height: 100%;
        border: 2px solid rgb(255, 255, 255);
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .navbar form input::placeholder {
        color: rgb(1, 11, 27);
        opacity: 0.5;
        font-size: 14px;
    }

    .navbar form select:first-child {
        color: #3a3838;
        font-size: 14px;
    }

    .navbar form input:focus {
        border: 5px solid #ffffff;
        background-color: rgb(255, 255, 255);
    }

    .navbar form select:focus {
        border: 5px solid #ffffff;
        background-color: rgb(255, 255, 255);
    }

    .navbar form select option {
        color: #0a5071;
        background-color: rgb(255, 255, 255);
        padding-top: 25px;
    }

    .navbar form button {
        background-color: rgb(255, 255, 255);
        height: 100%;
        color: #0a5071;
        border: 2px solid rgb(255, 255, 255);
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
    }

    .navbar li a {
        color: #ffffff;
        margin-left: 5px;
    }

    .navbar li a span {
        background-color: #fc0000;
        border-radius: 50%;
        padding: 10px;
        margin: 0;
        color: white;
    }

    .card-book {
        background-color: rgb(255, 255, 255);
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        width: 100%;
        height: 100%
    }

    .card-book .card-book-header {
        background-color: rgb(255, 255, 255);
        border-radius: 50%;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        height: 25px;
        position: relative;

    }

    .card-book .card-book-header .btn-price {
        border-radius: 0 0 20px;
        width: 30%;
        background-color: rgb(255, 0, 0);
        color: white;
        border: solid 1px rgb(255, 0, 0);
        /*  box-shadow: 0 4px 8px 0 #ffb25a; */
        position: absolute;
        top: 0;
        left: 0;
        font-weight: bold;
        font-size: 13px;
        border-top-left-radius: 15px;
    }

    .card-book .card-book-body {
        width: 100%;
        text-align: center;
        padding: 24px;
        height: 340px;
    }

    .card-book .card-book-body img {
        width: 100%;
        height: 100%;
        margin: 0px;
        border-radius: 12px;
    }

    .card-book .card-book-footer {
        background-color: rgb(255, 255, 255);
        padding: 10px;
        height: 45px;
        position: relative;
    }

    .card-book .card-book-footer .btn-add-chart {
        right: 1px;
        bottom: 3px;
        position: absolute;
        border: none;
        border-radius: 5px;
        background-color: #f3fafc;
        padding: 8px;
        color: rgb(255, 2, 2);
    }

    .btn-add-chart i {
        font-size: 24px;
    }

    .card-book .card-book-footer img {
        border-radius: 50%;
        border: solid 1px #0a5071;
        position: absolute;
        left: 3px;
        bottom: 3px;
        height: 38px;
        width: 38px;
    }

    .card-book .card-book-footer span {
        position: absolute;
        left: 15%;
        bottom: 0px;
        height: 38px;
        font-size: 16px;
        color: #0a5071;
        font-family: 'Libre Baskerville', serif;
        font-family: 'Lustria', serif;
    }

    .chart-icone {
        position: relative;
    }

    .chart-icone-number {
        background-color: rgb(0, 255, 17);
        border-radius: 50%;
        width: 23px;
        height: 23px;
        bottom: 60%;
        right: 70%;
        position: absolute;
        display: flex;
        flex-direction: row;

        align-items: center;
        justify-content: center;
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
        color: white;
        font-size: 8px;
    }

    @keyframes example {
        0% {
            background-color: rgb(0, 255, 8);
            bottom: 60%;
            right: 70%;
        }

        25% {
            background-color: yellow;
            bottom: 60%;
            right: 70%;
        }

        50% {
            background-color: blue;
            bottom: 60%;
            right: 70%;
        }

        75% {
            background-color: green;
            bottom: 60%;
            right: 70%;
        }

        100% {
            background-color: rgb(68, 0, 255);
            bottom: 60%;
            right: 70%;
        }
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light  text-white">
        <div class="container-fluid">
            <a class="navbar-brand app-name" href="#"><i class="fa fa-book-open"></i> &nbsp; Find your favourite Books</a>
            <button name=" " id=" " class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

<div class="mx-auto"></div>
                {{-- <form action="" class="mx-auto">


                    <select class="">
                        <option hidden selected>Choose Option</option>
                        <option>ssss</option>
                    </select>
                    <input type="text" class="form-control" placeholder="dddddddddddd">
                    <button name=" " id=" "> <i class="fa fa-search"></i> </button>


                </form> --}}


                <ul class="navbar-nav ms-auto mb-lg-0 ">

                    <li class="">
                        <a class="" href="{{route('cart.list')}}">


                            <span class="chart-icone">
                                <i class="fa fa-shopping-cart"></i>

                                    @if (\Cart::getContent()->count() > 0)
                                        <span class="chart-icone-number">{{ \Cart::getContent()->count() }}</span>
                                    @endif

                            </span>


                        </a>

                    </li>

                    <li class="mt-lg-0 mt-md-4 mt-4">
                        <a class="" href="#">
                            <span>
                                <i class="fa fa-user"></i>
                            </span>

                        </a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>

</html>
