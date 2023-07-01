@extends('guest.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive-md">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="align-middle"><img src="{{ $item->attributes->image }}" height="50px"></td>
                                    <td class="align-middle">{{ $item->name }}</td>
                                    <td class="align-middle">

                                        <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="number" min="1" name="quantity" value="{{ $item->quantity }}"
                                                class="form-control">

                                            <button type="submit" class="btn btn-success" title="Update">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="align-middle">{{ $item->price }}</td>
                                    <td class="align-middle text-right">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="btn btn-sm btn-danger" title="remove">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="">

                                <td colspan="2">
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                        @csrf
                                        <button class="btn  btn-danger" title="Remove All Cart">
                                            <i class="fa fa-trash"></i> &nbsp; Remove All Cart</button>
                                    </form>
                                </td>
                                <td colspan="3" class="text-center">
                                    <h3 class="text-primary text-uppercase font-weight-bolder">
                                       Books: {{$cartItems->count()}}</h3>
                                    <h3 class="text-primary text-uppercase font-weight-bolder">Total:
                                        {{ Cart::getTotal() }}</h3>


                                </td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="panier-add">
                <a href="{{route('books.list')}}">
                    <span class="material-symbols-outlined">
                        add_shopping_cart
                    </span>
                </a>
            </div>


            <style>


                .panier-add a {
                    border: none;
                    padding: 5px;
                    border-radius: 50%;
                    background: rgb(229, 255, 0);
                    z-index: 1000;
                    position: fixed;
                    top: 85%;
                    right: 0;
                    width: auto;
                }

                .panier-add a span {
                    font-size: 35px;
                    color: #ffffff;
                    border: 2px solid rgb(255, 247, 0);
                    padding: 20px;
                    border-radius: 50%;
                    background: rgb(255, 0, 0);
                }
            </style>
            <div class="col-md-6 mx-auto text-center">
                <form action="{{route('users.checkout')}}" method="POST">
                    @csrf
                    <button class="btn btn-success p-3 font-weight-bolder" type="submit"> <i class="fa fa-arrow-right"></i> Proceed to checkout</button>
                </form>
            </div>
        </div>
    </div>



    <style>
       td input {
            max-width: 100px !important;
        }
    </style>
@endsection
