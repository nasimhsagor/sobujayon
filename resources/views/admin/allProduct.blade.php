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

                <h1>All Product list</h1>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discount Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($p as $p )
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->quantity}}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->discount_price }}</td>
                        <td>{{ $p->category }}</td>
                        <td> <img src="/product/{{ $p->image }}"> </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('update_product',$p->id) }}">Edit</a>
                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{ url('delete_product',$p->id) }}">Delete</a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>

        </div>
    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
