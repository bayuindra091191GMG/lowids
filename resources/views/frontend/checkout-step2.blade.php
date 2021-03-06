@extends('layouts.frontend')

@section('body-content')

    <section class="breadcrumb parallax margbot30"></section>

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
                    <li class="active_step">2. Pengiriman</li>
                    <li>3. Konfirmasi Pemesanan</li>
                    <li class="last">4. Pembayaran</li>
                </ul>

                <form id="delivery-form" class="form-horizontal" role="form" method="POST" action="{{ route('checkout2Submit') }}">
                    {{ csrf_field() }}

                    <div class="checkout_delivery clearfix">
                        <p class="checkout_title">Agen Pengiriman</p>
                        @if($errors->count() > 0)
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach($errors->all() as $error)
                                    <b>{{ $error }}</b>
                                @endforeach
                            </div>
                        @endif
                        <ul>
                            @if(!$isTesting)
                                @for($i=0; $i<4; $i++)
                                    @php( $liID = "ridio".$i )
                                    @php( $price = $resultCollection[$deliveryTypes[$i]->courier->code."-".$deliveryTypes[$i]->code] )
                                    @php( $valueRadio = $deliveryTypes[$i]->courier_id."-".$deliveryTypes[$i]->id."-".$price )
                                    @php( $price = number_format($price, 0, ",", ".") )

                                    <li>
                                        <input id="{{$liID}}" type="radio" name="shippingRadio" hidden value="{{$valueRadio}}"/>
                                        <label for="{{$liID}}">{{$deliveryTypes[$i]->courier->description }} - {{ $deliveryTypes[$i]->description }}<b>Rp {{ $price }}</b>
                                            {{--@if($deliveryTypes[$i]->courier_id == 1)--}}
                                            {{--<img src="{{ URL::asset('frontend_images/standart_post.jpg') }}" alt="" />--}}
                                            {{--@elseif ($deliveryTypes[$i]->courier_id == 2)--}}
                                            {{--<img src="{{ URL::asset('frontend_images/premium_post.jpg') }}" alt="" />--}}
                                            {{--@endif--}}
                                        </label>
                                    </li>
                                @endfor
                            @else
                                @for($i=0; $i<4; $i++)
                                    @php( $liID = "ridio".$i )
                                    @php( $price = 0 )
                                    @php( $valueRadio = $deliveryTypes[$i]->courier_id."-".$deliveryTypes[$i]->id."-".$price )
                                    @php( $price = number_format($price, 0, ",", ".") )

                                    <li>
                                        <input id="{{$liID}}" type="radio" name="shippingRadio" hidden value="{{$valueRadio}}"/>
                                        <label for="{{$liID}}">{{$deliveryTypes[$i]->courier->description }} - {{ $deliveryTypes[$i]->description }}<b>Rp {{ $price }}</b>
                                            {{--@if($deliveryTypes[$i]->courier_id == 1)--}}
                                            {{--<img src="{{ URL::asset('frontend_images/standart_post.jpg') }}" alt="" />--}}
                                            {{--@elseif ($deliveryTypes[$i]->courier_id == 2)--}}
                                            {{--<img src="{{ URL::asset('frontend_images/premium_post.jpg') }}" alt="" />--}}
                                            {{--@endif--}}
                                        </label>
                                    </li>
                                @endfor
                            @endif


                        </ul>
                        {{-- antisipasi kalau ternyata ada lebih dari 4 pengiriman --}}
                        @if($deliveryTypes->count() > 4)
                            @for($i=4; $i<8; $i++)
                                @php( $liID = "ridio".$i )
                                @php( $liID = "ridio".$i )
                                @php( $price = $resultCollection[$deliveryTypes[$i]->courier->code."-".$deliveryTypes[$i]->code] )
                                @php( $valueRadio = $deliveryTypes[$i]->courier_id."-".$deliveryTypes[$i]->id."-".$price )
                                @php( $price = number_format($asdf, 0, ",", ".") )
                                <ul>
                                    <li>
                                        <input id="{{$liID}}" type="radio" name="radio" hidden />
                                        <label for="{{$liID}}">{{$deliveryTypes[$i]->Courier->description }} - {{ $deliveryTypes[$i]->description }}<b>Rp {{ $price }}</b>
                                            {{--@if($deliveryTypes[$i]->courier_id == 1)--}}
                                                {{--<img src="{{ URL::asset('frontend_images/standart_post.jpg') }}" alt="" />--}}
                                            {{--@elseif ($deliveryTypes[$i]->courier_id == 2)--}}
                                                {{--<img src="{{ URL::asset('frontend_images/premium_post.jpg') }}" alt="" />--}}
                                            {{--@endif--}}
                                        </label>
                                    </li>
                                </ul>
                            @endfor
                        @endif

                            {{--<div class="checkout_delivery_note"><i class="fa fa-exclamation-circle"></i>Express delivery options are available for in-stock items only.</div>--}}

                            {{--<input type="submit" value="Continue" class="pull-right btn btn-primary">--}}
                        <a class="btn btn-primary pull-right" onclick="document.getElementById('delivery-form').submit();" >Lanjutkan</a>
                        {{--<a class="btn active pull-right checkout_block_btn" href="{{route ('checkout3')}}" >Continue</a>--}}
                    </div>

                </form>
            </div><!-- //CHECKOUT BLOCK -->
        </div><!-- //CONTAINER -->
    </section><!-- //CHECKOUT PAGE -->
    <!-- BREADCRUMBS -->
@endsection