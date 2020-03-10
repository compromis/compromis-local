@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="card archive-nav">
    <div class="archive-month">
      <div class="select-wrapper">
        <label for="months">Per mes</label>
        <select id="months">
          <option value="Octubre">Octubre</option>
          <option value="Novembre">Novembre</option>
          <option value="Desembre">Desembre</option>
        </select>
      </div>
    </div>
    <div class="archive-category">
      <div class="select-wrapper">
        <label for="category">Per categoria</label>
        <select id="category">
          <option value="Economia">Economia</option>
          <option value="Feminisme">Feminisme</option>
        </select>
      </div>
    </div>
    <div class="archive-search">
      <label for="keyword">Per paraula clau</label>
      <input type="text" for="keyword"></input>
      <button class="search-button">
        <i class="far fa-search"></i>
      </button>
    </div>
  </div>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  Archive
  <ul class="home-posts">
  @while (have_posts()) @php the_post() @endphp
    <li>
      @include('partials.content-'.get_post_type())
    </li>
  @endwhile
  </ul>

  {!! get_the_posts_navigation() !!}
@endsection
