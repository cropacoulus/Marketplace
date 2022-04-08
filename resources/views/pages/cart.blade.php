@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
    <div class="page-content page-cart">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <!--- Breadcrumbs -->
                <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                    Cart
                    </li>
                </ol>
                </nav>
                <!--- End Breadcrumbs -->
            </div>
            </div>
        </div>
        </section>

        <section class="store-cart">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-9 col-lg-9 table-responsive">
                <table class="table table-borderless table-cart">
                <thead>
                    <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Menu</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td style="width: 25%;">
                        <img src="{{ asset('images/product-details-1.jpg') }}" class="cart-image w-100" alt="">
                    </td>
                    <td style="width: 35%;">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by Andi Sukka</div>
                    </td>
                    <td style="width: 35%">
                        <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-link px-2" type="button">
                            <a href=""><img src="{{ asset('images/dash.svg') }}" alt=""></a>
                            </button>
                            <input type="text" class="form-control" value="1">
                            <button class="btn btn-link px-2" type="button">
                            <a href=""><img src="{{ asset('images/plus.svg') }}" alt=""></a>
                            </button>
                        </div>
                        </div>
                    </td>
                    <td style="width: 35%;">
                        <div class="product-title">$29,112</div>
                        <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                        <a href="#" class="btn btn-remove-cart">
                        Remove
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 25%;">
                        <img src="{{ asset('images/product-details-2.jpg') }}" class="cart-image w-100" alt="">
                    </td>
                    <td style="width: 35%;">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by Andi Sukka</div>
                    </td>
                    <td style="width: 35%">
                        <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-link px-2" type="button">
                            <a href=""><img src="{{ asset('images/dash.svg') }}" alt=""></a>
                            </button>
                            <input type="text" class="form-control" value="1">
                            <button class="btn btn-link px-2" type="button">
                            <a href=""><img src="{{ asset('images/plus.svg') }}" alt=""></a>
                            </button>
                        </div>
                        </div>
                    </td>
                    <td style="width: 35%;">
                        <div class="product-title">$29,112</div>
                        <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                        <a href="#" class="btn btn-remove-cart">
                        Remove
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 25%;">
                        <img src="{{ asset('images/product-details-3.jpg') }}" class="cart-image w-100" alt="">
                    </td>
                    <td style="width: 35%;">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by Andi Sukka</div>
                    </td>
                    <td style="width: 35%">
                        <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-link px-2" type="button">
                            <a href=""><img src="{{ asset('images/dash.svg') }}" alt=""></a>
                            </button>
                            <input type="text" class="form-control" value="1">
                            <button class="btn btn-link px-2" type="button">
                            <a href=""><img src="{{ asset('images/plus.svg') }}" alt=""></a>
                            </button>
                        </div>
                        </div>
                    </td>
                    <td style="width: 35%;">
                        <div class="product-title">$29,112</div>
                        <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                        <a href="#" class="btn btn-remove-cart">
                        Remove
                        </a>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Summary</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Products
                        <span>$53.98</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Country Tax
                        <span>10%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                        <strong>Total amount</strong>
                        </div>
                        <span><strong>$53.98</strong></span>
                    </li>
                    </ul>

                    <a href="cart-details.html" type="button" class="btn btn-success text-white btn-md btn-block">
                    Go to checkout
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
@endsection