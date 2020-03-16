<div class="card archive-nav">
    <div class="archive-month">
      <div class="select-wrapper">
        <label for="months">{{ __('Per mes', 'sage') }}</label>
        <select id="months">
          <option value="">{{ __('Tots', 'sage') }}</option>
          {!! wp_get_archives(['type' => 'monthly', 'echo' => false, 'format' => 'option']) !!}
        </select>
      </div>
    </div>
    <div class="archive-category">
      <div class="select-wrapper">
        <label for="cat">{{ __('Per categoria', 'sage') }}</label>
        {!! wp_dropdown_categories(['echo' => false, 'show_option_all' => __('Totes', 'sage')]) !!}
      </div>
    </div>
    <div class="archive-search">
      <form role="search" method="POST" action="/">
        <label for="keyword">{{ __('Per paraula clau', 'sage') }}</label>
        <input type="text" name="s" id="keyword" value="{{ isset($_POST['s']) ? $_POST['s'] : '' }}"></input>
        <button class="search-button" type="submit">
          <i class="far fa-search"></i>
          <span class="sr-only">{{ __('Busca', 'sage') }}</span>
        </button>
      </form>
    </div>
  </div>
