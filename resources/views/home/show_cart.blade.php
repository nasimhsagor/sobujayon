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
      <title>Sobujayon</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->




         <section class="vh-100" style="background-color: #8ab387;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <p><span class="h2">Shopping Cart </span></p>
                  @php
                      $totalPrice=0;
                  @endphp
                  @foreach ($cart as $cart)

                  <div class="card mb-4">
                    <div class="card-body p-4">

                      <div class="row align-items-center">
                        <div class="col-md-2">
                          <img src="/product/{{ $cart->image}}"
                            class="img-fluid" alt="Generic placeholder image">
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Name</p>
                            <p class="lead fw-normal mb-0">{{ $cart->product_title}}</p>
                          </div>
                        </div>

                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Quantity</p>
                            <p class="lead fw-normal mb-0">{{ $cart->quantity}} PICS</p>
                          </div>
                        </div>

                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Total Price</p>
                            <p class="lead fw-normal mb-0">{{ $cart->price}} TAKA</p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                              <p class="small text-muted mb-4 pb-2">Action</p>
                              <a class="btn btn-danger" href="{{ url('delete_cart',$cart->id) }}">Remove</a>
                            </div>
                          </div>
                      </div>

                    </div>
                  </div>

@php

    $totalPrice=$totalPrice+$cart->price;
@endphp



                  @endforeach


                  <div class="card mb-5">
                    <div class="card-body p-4">
                      <div class="float-end">
                        <p class="mb-0 me-5 d-flex align-items-center">
                          <span class="small text-muted me-2">Total Amount:</span> <span
                            class="lead fw-normal">{{ $totalPrice }} TAKA</span>
                        </p>
                      </div>

                    </div>
                  </div>

                  <div class="d-flex justify-content-end">

                    <a class="btn btn-light" href="{{ url('/') }}">Continue shopping</a>
                    {{-- {{ url('/cash_order') }} --}}
                    <a class="btn btn-primary" href="{{ url('/payment',$totalPrice) }}">Confirm Order</a>
                  </div>

                </div>
              </div>
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
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
