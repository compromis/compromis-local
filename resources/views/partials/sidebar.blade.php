<div class="d-none d-md-block">
	@php dynamic_sidebar('sidebar-language') @endphp
</div>

@if($local->facebook || $local->twitter || $local->instagram || $local->tiktok)
<ul class="page-menu social-network-list">
  @if($local->facebook)
  <li>
    <a href="{{ $local->facebook }}" target="_blank" rel="noopener" title="Facebook">
      <i class="fab fa-facebook"></i> Compromís {{ $local->name }}
    </a>
  </li>
  @endif
  @if($local->twitter)
	<li>
	  <a href="https://twitter.com/{{ $local->twitter }}" target="_blank" rel="noopener" title="Twitter / X">
		  <i class="fab fa-twitter"></i> {{ '@' . $local->twitter }}
	  </a>
	</li>
  @endif
  @if($local->instagram)
	<li>
	  <a href="https://instagram.com/{{ $local->instagram }}" target="_blank" rel="noopener" title="Instagram">
		  <i class="fab fa-instagram"></i> {{ '@' . $local->instagram }}</li>
	  </a>
	</li>
  @endif
  @if($local->tiktok)
	<li>
	  <a href="https://instagram.com/{{ $local->tiktok }}" target="_blank" rel="noopener" title="TikTok">
		  <i class="fab fa-tiktok"></i> {{ '@' . $local->tiktok }}
	  </a>
	</li>
  @endif
</ul>
@endif

@php dynamic_sidebar('sidebar-primary') @endphp
