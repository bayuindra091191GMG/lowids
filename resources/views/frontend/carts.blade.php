@extends('layouts.frontend')

@section('body-content')
    <!-- BREADCRUMBS -->
    <section class="breadcrumb parallax margbot30"></section>
    <!-- //BREADCRUMBS -->


    <!-- PAGE HEADER -->
    <section class="page_header">

        <!-- CONTAINER -->
        <div class="container">
            <h3 class="pull-left"><b>Keranjang Belanja</b></h3>

            <div class="pull-right">
                {{--<a href="{{ route('product-list', ['categoryId' => 0]) }}" >Back to shop<i class="fa fa-angle-right"></i></a>--}}
            </div>
        </div><!-- //CONTAINER -->
    </section><!-- //PAGE HEADER -->


    <!-- SHOPPING BAG BLOCK -->
    <section class="shopping_bag_block">

        <!-- CONTAINER -->
        <div class="container">

            <!-- ROW -->
            <div class="row">

                <!-- CART TABLE -->
                <div class="col-lg-9 col-md-9 padbot40">

                    <table class="shop_table">
                        <thead>
                        <tr>
                            <th class="product-thumbnail"></th>
                            <th class="product-name">Produk</th>
                            <th class="product-price">Harga</th>
                            <th class="product-quantity">Kuantitas</th>
                            <th class="product-subtotal">Total</th>
                            <th class="product-remove"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($carts as $cart)
                            @php ( $trId = "cart_item_".$cart->id )
                            @php ( $qtyId = "cart_quantity_".$cart->id )
                            @php ( $productTotalId = "product-subtotal-".$cart->id )
                            <tr class="cart_item" id="{{ $trId }}">
                                <td class="product-thumbnail">
                                        {{--<img src="{{ asset('storage\product\\'. $cart->product->product_image()->where('featured', 1)->first()->path) }}" width="100px" alt="" /></a>--}}
                                    <div class="cart-image" style="background-image: url('{{ asset('storage/product/'. $cart->product->product_image()->where('featured', 1)->first()->path) }}')"></div>
                                </td>
                                <td class="product-name">
                                    <a href="{{ route('product-detail', ['id' => $cart->product->id]) }}">
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
                                    <ul class="variation">
                                        <li class="variation-Color">Kategori: <span>{{$cart->Product->Category->name}}</span></li>
                                        @if(!empty($cart->note))
                                            @php( $notes = explode(';', $cart->note, 2) )
                                            @foreach($notes as $note)
                                                @if(!empty($note))
                                                    @php( $property = explode('=', $note, 2) )
                                                    <li class="variation-Color"><span>{{ $property[0] }}: {{ $property[1] }}</span></li>
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </td>
                                <td class="product-price">Rp. {{ $cart->price }}</td>
                                <td class="product-quantity">
                                    <input type="text" id="{{ $qtyId }}" value="{{ $cart->quantity }}" style="width:50%" onkeyup="editCartQuantity('{{ $cart->id }}')"/>
                                </td>
                                <td class="product-subtotal" id="{{ $productTotalId }}">Rp. {{ $cart->total_price }}</td>
                                <td class="product-remove"><a href="{{ route('delete-cart', ['cartId' => $cart->id]) }}"><i>X</i></a></td>
                            </tr>
                            <tr class="cart_item">
                                <td colspan="5" class="border_bottom">
                                    @if(!empty($cart->buyer_note))
                                        <p><span style="font-weight: bold;">Catatan :</span> {{ $cart->buyer_note }}</p>
                                    @endif
                                </td>
                                <td class="border_bottom" style="padding-right: 0">
                                    @if(!empty($cart->buyer_note))
                                        <button class="btn btn-sm btn-dark" onclick="getNotes('{{ $cart->id }}')">Ubah Catatan</button>
                                    @else
                                        <button class="btn btn-sm btn-dark" onclick="getNotes('{{ $cart->id }}')">Tambah Catatan</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div><!-- //CART TABLE -->


                <!-- SIDEBAR -->
                <div id="sidebar" class="col-lg-3 col-md-3 padbot50">

                    <!-- BAG TOTALS -->
                    <div class="sidepanel widget_bag_totals">
                        <h3>RINGKASAN</h3>
                        <table class="bag_total">
                            {{--<tr class="cart-subtotal clearfix">--}}
                                {{--<th>Sub total</th>--}}
                                {{--<td id="sub-total-price">Rp. {{ $totalPrice }}</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="shipping clearfix">--}}
                                {{--<th>SHIPPING</th>--}}
                                {{--<td>-</td>--}}
                            {{--</tr>--}}
                            <tr class="total clearfix">
                                <th>Total</th>
                                <td id="total-price">Rp. {{ $totalPrice }}</td>
                            </tr>
                        </table>

                        @if($carts->count() > 0)
                            <a class="btn btn-primary" href="{{ route('checkout') }}" >CHECKOUT</a>
                        @else
                            <button class="btn btn-primary" disabled>CHECKOUT</button>
                        @endif
                        {{--<a class="btn inactive" href="{{ route('product-list', ['categoryId' => 0]) }}" >Continue shopping</a>--}}
                    </div><!-- //REGISTRATION FORM -->
                </div><!-- //SIDEBAR -->
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->
    </section><!-- //SHOPPING BAG BLOCK -->

    <script>
        {{--var urlLinkDelete = '{{route('deleteCart')}}';--}}
        var urlLinkEdit = '{{route('editCart')}}';
    </script>

    <div class="modal fade" id="modal-cart-note" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 10%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {!! Form::open(array('action' => 'Frontend\CartController@storeNotes', 'method' => 'POST', 'role' => 'form')) !!}
                {{ csrf_field() }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{--<h4 class="modal-title" id="myModalLabel">Success</h4>--}}
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="buyer_note">Catatan Tambahan</label>
                        <textarea rows="5" style="resize: vertical" id="buyer_note" name="buyer_note" maxlength="50" placeholder="Catatan tambahan untuk penjual"></textarea>
                    </div>
                    {{ Form::hidden('cart_id', '', array('id' => 'cart_id')) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    @include('frontend.partials._modal')
@endsection
