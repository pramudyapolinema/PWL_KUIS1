@extends('layout.app')
@section('title', 'Customers')
@section('content')

    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>our suppliers</h4>
              <h2>real reviews</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team-members" id="pelanggan">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Customers</h2>
            </div>
          </div>
          @foreach($pelanggan as $p)
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{$p -> foto}}" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>{{ $p -> nama }}</h4>
                <span>{{ $p -> pekerjaan }}</span>
                <p>{{ $p -> alamat }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    {{$pelanggan -> links('vendor.pagination.custom')}}

@endsection