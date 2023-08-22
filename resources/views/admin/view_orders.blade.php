<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('admin.css')
    <style type="text/css">

        .q{
            text-align: center;
            font-size: 40px;
            padding-bottom: 40px;
        }
        </style>

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
                {{-- <h1 class="q">Order list</h1> --}}

                <div class="row ">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Order List</h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th> Client Name </th>
                                  <th> Phone </th>
                                  <th> Address </th>
                                  <th> Order No </th>
                                  <th> Product Name </th>
                                  <th> Quantity</th>
                                  <th> Product Cost </th>
                                  <th> Payment Status </th>
                                  <th> Delivery Status </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($o as $o)
                                <tr>
                                  <td>{{ $o->name}}</td>
                                  <td>{{ $o->phone}}</td>
                                  <td>{{ $o->address}}</td>
                                  <td>{{ $o->id}}</td>
                                  <td>{{ $o->product_title}}</td>
                                  <td>{{ $o->quantity}}</td>
                                  <td>{{ $o->price }}</td>
                                  <td>{{ $o->payment_status }}</td>
                                  <td>{{ $o->delivery_status }}</td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
