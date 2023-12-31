<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
         @include('home.header')

        <div class="heading_container heading_center">
            <h2>
                All <span>Category</span>
            </h2>
         </div>


         <div class="container">



            <div class="row">
                @foreach ($cat as $cat)
                <div class="card my-2 mx-2" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="text-center">{{ $cat->category_name }}</h5>
                      <div class="col-md-12 text-center">
                      <a href="{{ url('/catProducts',$cat->category_name) }}" class="btn btn-success">View Products</a>
                      </div>
                    </div>
                  </div>

                @endforeach
            </div>
        </div>


      </div>
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
