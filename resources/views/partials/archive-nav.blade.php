<div class="card archive-nav">
    <div class="archive-month">
      <div class="select-wrapper">
        <label for="months">Per mes</label>
        <select id="months">
          {!! wp_get_archives(['type' => 'monthly', 'echo' => false, 'format' => 'option']) !!}
        </select>
      </div>
    </div>
    <div class="archive-category">
      <div class="select-wrapper">
        <label for="category">Per categoria</label>
        {!! wp_dropdown_categories(['echo' => false]) !!}
      </div>
    </div>
    <div class="archive-search">
      <form role="search" method="POST" action="/">
        <label for="keyword">Per paraula clau</label>
        <input type="text" name="s" id="keyword" value="{{ isset($_POST['s']) ? $_POST['s'] : '' }}"></input>
        <button class="search-button" type="submit">
          <i class="far fa-search"></i>
        </button>
      </form>
    </div>
  </div>
