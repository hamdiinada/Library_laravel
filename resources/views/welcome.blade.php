@extends('guest.app')
@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="panier">
                <a href="{{route('cart.list')}}">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                </a>
            </div>




            @foreach ($books as $book)
                <div class="col-md-4 col-lg-3 p-3 p-3">
                    <div class="card-book shadow">
                        <div class="card-book-header ">
                            <button name=" " id=" " class="btn-price">{{ $book->price }}</button>

                        </div>
                        <div class="card-book-body">
                            <img height="" width="" alt="Books-Shop-img" src="{{ $book->image }}"
                                class="">
                        </div>
                        <div class="card-book-footer ">
                            <img height="" width="" alt="Books-Shop-img" src="{{ $book->image }}">
                            <span class="">{{ $book->title }}</span>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $book->id }}" name="id">
                                <input type="hidden" value="{{ $book->title }}" name="title">
                                <input type="hidden" value="{{ $book->price }}" name="price">
                                <input type="hidden" value="{{ $book->image }}" name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button name="btn-dd" id=" " aria-label="search" class="btn-add-chart">
                                    <i class="fa fa-shopping-cart  "></i>
                            </form>

                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>



    </div>
    <style>


        .panier a {
            border: none;
            padding: 5px;
            border-radius: 50%;
            background: rgb(255, 225, 0);
            z-index: 1000;
            position: fixed;
            top: 85%;
            right: 0;
            width: auto;
        }

        .panier a span {
            font-size: 35px;
            color: #ffffff;
            border: 2px solid red;
            padding: 20px;
            border-radius: 50%;
            background: rgb(255, 0, 0);
        }
    </style>
@endsection
