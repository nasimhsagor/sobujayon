<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
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
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

<form action="{{ url('/add_cart',$product->id) }}" method="POST">
    @csrf
         <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image" src="/product/{{ $product->image }}" width="250" /> </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <p>&nbsp</p><a href="{{ url('/view_products') }}" class="btn btn-primary">Back</a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                    </div>
                                    <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{ $product->category }}</span>
                                        <h5 class="text-uppercase">{{ $product->title }}</h5>
                                        <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{ $product->price }}Taka</span>
                                            <div class="ml-2"> <small class="dis-price">{{ $product->discount_price }}Taka</small> <span>20% OFF</span> </div>
                                        </div>
                                    </div>
                                    <p class="about">{{ $product->description }}</p>
                                    <div class="sizes mt-5">
                                        <h6 class="text-uppercase">Quantity</h6>
                                        <input type="number" name="quantity" value="1" min="1" style="width:100px">
                                    </div>
                                    <div class="cart mt-4 align-items-center"> <button class="btn btn-success text-uppercase mr-2 px-4" type="submit" value="submit">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


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
