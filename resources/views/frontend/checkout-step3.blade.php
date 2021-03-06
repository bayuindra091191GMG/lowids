@extends('layouts.frontend')

@section('body-content')

    <!-- BREADCRUMBS -->
    <section class="breadcrumb parallax margbot30"></section>
    <!-- //BREADCRUMBS -->


    <!-- PAGE HEADER -->
    <section class="page_header">

        <!-- CONTAINER -->
        <div class="container border0 margbot0">
            <h3 class="pull-left"><b>Checkout</b></h3>

            <div class="pull-right">
                <a href="{{ route('cart-list') }}" >Kembali ke keranjang belanja<i class="fa fa-angle-right"></i></a>
            </div>
        </div><!-- //CONTAINER -->
    </section><!-- //PAGE HEADER -->


    <!-- CHECKOUT PAGE -->
    <section class="checkout_page">

        <!-- CONTAINER -->
        <div class="container">

            <!-- CHECKOUT BLOCK -->
            <div class="checkout_block">
                <ul class="checkout_nav">
                    <li class="done_step">1. Alamat</li>
                    <li class="done_step">2. Pengiriman</li>
                    <li class="active_step">3. Konfirmasi Pemesanan</li>
                    <li class="last">4. Metode Pembayaran</li>
                </ul>
            </div><!-- //CHECKOUT BLOCK -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-9 col-md-9 padbot60">
                    <div class="checkout_confirm_orded clearfix">
                        <div class="checkout_confirm_orded_bordright clearfix">
                            <div class="billing_information">
                                <p class="checkout_title margbot10">Informasi Billing</p>

                                <div class="billing_information_content margbot40">
                                    <span>{{$userData->first_name}} {{$userData->last_name}}</span>
                                    <span>{{$userData->phone}}</span>
                                    <span>{{$userData->email}}</span>
                                </div>

                                <p class="checkout_title margbot10">Alamat Pengiriman</p>

                                <div class="billing_information_content margbot40">
                                    <span>{{$userAddress->name}}</span>
                                    <span>{{$userData->phone}}</span>
                                    <span>{{$userAddress->detail}}</span>
                                    <span>{{$userAddress->subdistrict_name}} {{$userAddress->city_name}}</span>
                                    <span>{{$userAddress->province_name}} {{$userAddress->postal_code}}</span>
                                </div>
                            </div>

                            <div class="payment_delivery">
                                <p class="checkout_title margbot10">Agen Pengiriman</p>
                                <p>{{ $carts[0]->courier->description }}<br/>
                                {{ $carts[0]->deliveryType->description }}</p>
                            </div>
                        </div>

                        <div class="checkout_confirm_orded_products">
                            <p class="checkout_title">Produk Pesanan</p>
                            <ul class="cart-items">
                                @foreach($carts as $cart)
                                    <li class="clearfix">
                                        {{--<img class="cart_item_product" src="{{ URL::asset('frontend_images/tovar/women/1.jpg') }}" alt="" />--}}
                                        <div class="cart-image-header" style="background-image: url('{{ asset('storage/product/'. $cart->product->product_image()->where('featured', 1)->first()->path) }}')"></div>
                                        <a href="{{ route('product-detail', ['id' => $cart->product->id]) }}" class="cart_item_title">
                                            @if(!empty($cart->size_option) && empty($cart->weight_option) && empty($cart->size_option))
                                                {{ $cart->product->name }} - {{ $cart->size_option }}
                                            @elseif(empty($cart->size_option) && !empty($cart->weight_option) && empty($cart->size_option))
                                                @php( $weightVal = floatval(floatval($cart->weight_option) / 1000)  )
                                                {{ $cart->product->name }} - {{ $weightVal }} Kg
                                            @elseif(empty($cart->size_option) && empty($cart->weight_option) && !empty($cart->qty_option))
                                                {{ $cart->product->name }} - {{ $cart->qty_option }}
                                            @else
                                                {{ $cart->product->name }}
                                            @endif
                                        </a>
                                        <span class="cart_item_price">Rp {{ $cart->price }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 padbot60">

                    <!-- BAG TOTALS -->
                    <div class="sidepanel widget_bag_totals your_order_block">
                        <h3>Pesanan Anda</h3>
                        <table class="bag_total">
                            <tr class="cart-subtotal clearfix">
                                <th>Sub total</th>
                                <td>Rp {{$totalPrice}}</td>
                            </tr>
                            <tr class="shipping clearfix">
                                <th>Ongkos  Kirim</th>
                                <td>Rp {{$shipping}}</td>
                            </tr>
                            <tr class="total clearfix">
                                <th>Total</th>
                                <td>Rp {{$grandTotal}}</td>
                            </tr>
                        </table>
                        <a class="btn btn-primary" href="{{ Route('checkout4') }}" >Pilih Metode Pembayaran</a>
                        <a class="btn btn-primary" href="{{ route('checkout2') }}" >Kembali</a>
                    </div><!-- //REGISTRATION FORM -->
                </div><!-- //SIDEBAR -->
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->
    </section><!-- //CHECKOUT PAGE -->
@endsection
