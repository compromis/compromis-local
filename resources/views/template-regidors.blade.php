{{--
  Template Name: Regidors
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="page">
      <ul class="card-list card-list-regidors">
        <li class="card card-regidor">
          <img class="card-regidor-img" src="https://source.unsplash.com/k1LNP6dnyAE" /> 
          <div class="card-regidor-info">
            <div class="card-regidor-info-name">Doggy McDogface</div>
            <div class="card-regidor-info-charge">Regidog de cultura</div>
            <ul class="card-regidor-info-social">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </section>
  @endwhile
@endsection
