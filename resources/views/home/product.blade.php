<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">
        @foreach ($product as $products)
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
          {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
 </section>
