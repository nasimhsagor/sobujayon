<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('admin.css')
    <style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color{

        color: black;
        padding-bottom: 20px;
    }
    label{
        display: inline-block;
        width: 200px;

    }
    .div_design{
        padding-bottom: 15px
    }

    </style>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}

            </div>

            @endif

                <div class="div_center">
                    <h2 class="h2_font">Add Product</h2>

                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="div_design">
                        <label>Product Title: </label>
                        <input type="text" class="input_color" id="title" name="title" >
                        </div>

                        <div class="div_design">
                            <label>Description:   </label>
                            <input type="text" class="input_color" id="description" name="description" >

                        </div>

                        <div class="div_design">
                            <label>Price: </label>
                            <input type="number" class="input_color" id="price" name="price" >

                        </div>

                        <div class="div_design">
                            <label>Quantity: </label>
                            <input type="number" class="input_color" id="quantity" name="quantity" >

                        </div>

                        <div class="div_design">
                            <label>Category: </label>
                            <select class="input_color" name="category" id="category">
                                <option value="" selected="">Add category here</option>
                                @foreach ($category as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>

                                @endforeach


                            </select>

                        </div>

                        <div class="div_design">
                            <label>Discount Price: </label>
                            <input type="number" class="input_color" id="discount_price" name="discount_price" >

                        </div>
                        <div class="div_design">
                            <label>Image: </label>
                            <input type="file" class="input_color" id="image" name="image" >

                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Product">
                </div>
            </form>

        </div>
    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
