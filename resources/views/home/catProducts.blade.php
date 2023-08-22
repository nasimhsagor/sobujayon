<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="/home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="/home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="/home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="/home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->



         <section class="product_section layout_padding">
            <div class="container">
               <div class="heading_container heading_center">
                  <h2>
                     Our <span>products</span>
                  </h2>
               </div>
               <div class="row">
                @foreach ($products as $products)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="" class="option1">
                                {{ $products->category }}
                              </a>
                              <a href="{{ url('product_details',$products->id) }}" class="option2">
                                Product Details
                                </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="/product/{{ $products->image }}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{ $products->title }}
                           </h5>
                           <h6>
                            {{ $products->price }} Taka
                           </h6>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  {{-- {!! $products->withQueryString()->links('pagination::bootstrap-5') !!} --}}
            </div>
         </section>





      </div>
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
        <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://www.facebook.com/pisoft.inc">PI Soft Inc.</a><br>

           Developed By <a href="#" target="_blank">Nasim Haidar Sagor</a>

        </p>
     </div>
      <!-- jQery -->
      <script src="/home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="/home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="/home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="/home/js/custom.js"></script>
   </body>
</html>
