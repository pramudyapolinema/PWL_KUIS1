@extends('layout.app')
@section('title', 'Our Products')
@section('content')

    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>di.segaris products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products" id="produk">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                @foreach($produk as $p)
                    <div class="col-lg-4 col-md-4 all {{$p -> filter}}">
                      <div class="product-item">
                        <a href="#"><img src="{{$p -> foto}}" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{$p -> nama}}</h4></a>
                          <h6>Rp{{$p -> harga}}</h6>
                          <p>{{$p -> deskripsi}}</p>
                          
                          <ul class="stars">
                          @for ($i = 0; $i < $p -> rating; $i++)
                            <li><i class="fa fa-star"></i></li>
                          @endfor
                          @for ($i = $p -> rating; $i < 4; $i++)
                            <li><i class="fa fa-star-o"></i></li>
                          @endfor
                            <li>{{$p->rating}}</li>
                          </ul>
                          <span>Reviews ({{rand(1,100)}})</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{$produk -> links('vendor.pagination.custom')}}
          </div>
        </div>
      </div>
    </div>

@endsection