@php $regidor = $post; @endphp
<article @php post_class() @endphp>
  <ul class="pl-0">
    @include('partials.regidor', ['hide_name' => true])
  </ul>
  <hr />
  <div class="entry-content">
    @php the_content() @endphp
  </div>
</article>
