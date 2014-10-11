<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')) ?>">
  <div class="form-group">
    <input type="search" class="search-field form-control" placeholder="Поиск дел, сотрудников и др. информации" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
  </div>
  <div class="form-group">
    <input type="submit" class="search-submit btn btn-default" value="Найти!">
  </div>
</form>