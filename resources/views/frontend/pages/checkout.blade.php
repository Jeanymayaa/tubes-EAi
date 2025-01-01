@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Make Your Checkout Here</h2>
                                <p>Please register in order to checkout more quickly</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Belakang<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>No Telepon <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Kota<span>*</span></label>
                                            <select name="country" id="country">
                                                <option value=>Pilih Kota</option>
                                                <option value="AAN">Aceh Tamiang</option>
                                                <option value="AMB">Ambon</option>
                                                <option value="ATB">Atambua</option>
                                                <option value="BKL">Bengkulu</option>
                                                <option value="BMG">Bojonegoro</option>
                                                <option value="BNA">Banda Aceh</option>
                                                <option value="BUL">Bulukumba</option>
                                                <option value="BUL">Bulungan</option>
                                                <option value="BGR">Bogor</option>
                                                <option value="BKS">Bekasi</option>
                                                <option value="BKH">Bireuen</option>
                                                <option value="BIT">Bitung</option>
                                                <option value="BJM">Banjarmasin</option>
                                                <option value="BWI">Banyuwangi</option>
                                                <option value="CJB">Cilegon</option>
                                                <option value="CBL">Cianjur</option>
                                                <option value="CBN">Cilacap</option>
                                                <option value="DAK">Dharmasraya</option>
                                                <option value="DOL">Donggala</option>
                                                <option value="DPS">Denpasar</option>
                                                <option value="DKT">Depok</option>
                                                <option value="GRT">Garut</option>
                                                <option value="GTO">Gorontalo</option>
                                                <option value="GRS">Gresik</option>
                                                <option value="HSU">Hulu Sungai Utara</option>
                                                <option value="JBN">Jember</option>
                                                <option value="JEM">Jembrana</option>
                                                <option value="JKT">Jakarta</option>
                                                <option value="JKT BAR">Jakarta Barat</option>
                                                <option value="JKT KEP">Kepulauan Seribu</option>
                                                <option value="JKT PUS">Jakarta Pusat</option>
                                                <option value="JKT SEL">Jakarta Selatan</option>
                                                <option value="JKT TIM">Jakarta Timur</option>
                                                <option value="JYP">Jayapura</option>
                                                <option value="KAB">Pandeglang</option>
                                                <option value="KAM">Kampar</option>
                                                <option value="KED">Kediri</option>
                                                <option value="KDG">Karawang</option>
                                                <option value="KLT">Klaten</option>
                                                <option value="KUB">Kuburaya</option>
                                                <option value="KUP">Kupang</option>
                                                <option value="LMB">Labuan Bajo</option>
                                                <option value="LKJ">Lamongan</option>
                                                <option value="LHG">Langsa</option>
                                                <option value="MAM">Mamuju</option>
                                                <option value="MGL">Magelang</option>
                                                <option value="MDN">Medan</option>
                                                <option value="MER">Merauke</option>
                                                <option value="MND">Manado</option>
                                                <option value="MLG">Malang</option>
                                                <option value="MKS">Makassar</option>
                                                <option value="MKS">Muko-Muko</option>
                                                <option value="NGL">Ngawi</option>
                                                <option value="OKI">Ogan Komering Ilir</option>
                                                <option value="OKU">Ogan Utara</option>
                                                <option value="PBL">Pacitan</option>
                                                <option value="PDG">Padang</option>
                                                <option value="PKA">Pati</option>
                                                <option value="PKN">Pekanbaru</option>
                                                <option value="PLB">Palembang</option>
                                                <option value="PLW">Palu</option>
                                                <option value="PKL">Pekalongan</option>
                                                <option value="PML">Pemalang</option>
                                                <option value="PNT">Pematangsiantar</option>
                                                <option value="PDK">Pesisir Selatan</option>
                                                <option value="PPR">Pringsewu</option>
                                                <option value="PWT">Purwokerto</option>
                                                <option value="RIA">Rantauprapat</option>
                                                <option value="REJ">Rejang Lebong</option>
                                                <option value="RMG">Rembang</option>
                                                <option value="SBG">Subang</option>
                                                <option value="SBL">Simalungun</option>
                                                <option value="SGG">Sigli</option>
                                                <option value="SLG">Salatiga</option>
                                                <option value="SLP">Singkawang</option>
                                                <option value="SNT">Sumbawa Besar</option>
                                                <option value="SBT">Seram Bagian Timur</option>
                                                <option value="SIA">Siau Tagulandang Biaro</option>
                                                <option value="SOR">Sorong</option>
                                                <option value="SMG">Semarang</option>
                                                <option value="SMR">Samarinda</option>
                                                <option value="TBA">Tanjung Jabung</option>
                                                <option value="TGR">Tanjung</option>
                                                <option value="TGR">Tanjungbalai</option>
                                                <option value="TBK">Tasikmalaya</option>
                                                <option value="TGL">Tegal</option>
                                                <option value="TAR">Tarakan</option>
                                                <option value="TLG">Ternate</option>
                                                <option value="TOL">Tolitoli</option>
                                                <option value="TLK">Tulang Bawang</option>
                                                <option value="TBA">Tapanuli Selatan</option>
                                                <option value="UUL">Ujung Pandang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Alamat<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>TOTAL  BELANJA</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Subtotal Belanja<span>Rp{{number_format(Helper::totalCartPrice(),3)}}</span></li>
                                            <li class="shipping">
                                                Biaya Pengiriman
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="">Pilih Pengiriman</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: Rp{{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Free</span>
                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>Rp{{number_format(session('coupon')['value'],3)}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>Rp{{number_format($total_amount,3)}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>Rp{{number_format($total_amount,3)}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                {{-- <div class="single-widget">
                                    <h2>Payments</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                            {{-- <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> Cash On Delivery</label><br>
                                                <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label> 
                                            </form-group>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--/ End Order Widget -->
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">Lanjutkan pembayaran</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush