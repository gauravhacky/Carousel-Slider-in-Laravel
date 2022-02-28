<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


<main id="main">
<div class="container">
	 <h3>Product Slider Example in Laravel | 8Bityard.com</h3>
	 <br>
      <!--On Sale-->
      <div class="wrap-show-advance-info-box style-1 has-countdown">
         <h3 class="title-box">On Sale (Top Selling Products)</h3>
         <br>
         <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false">
            @if ($products->count() > 0 )
            @foreach($products as $product)
            <div class="product product-style-2 equal-elem ">
               <div class="product-thumnail">
                  <a href="" title="{{$product->product_name}}">
                     <figure><img src="{{ url('/uploads/product/thumbnail/'.$product->product_image) }}" width="800" height="800" alt="{{$product->product_name}}"></figure>
                  </a>
                  <div class="group-flash">
                     <span class="flash-item sale-label">sale</span>
                  </div>
                  <div class="wrap-btn">
                     <a href="" class="function-link">quick view</a>
                  </div>
               </div>
               <div class="product-info">
                  <a href="" class="product-name"><span>{{$product->product_name}} | {{$product->brand_name}}</span></a>
                  <div class="wrap-price"><ins><p class="product-price">From ₹{{$product->price_after_discount}}</p></ins> <del><p class="product-price">{{$product->price}}</p></del></div>
               </div>
            </div>
            @endforeach
            @else
            <h4>Oops, No Product Found !</h4>
            @endif
         </div>
      </div>
</div>
</main>



<script src="{{asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>