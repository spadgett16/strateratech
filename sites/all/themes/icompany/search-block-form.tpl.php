<?php
//$search["search_block_form"] = str_replace('value=""', 'value="search..." onblur="setTimeout(\'closeResults()\',2000); if (this.value == \'\') {this.value = \'\';}"  onfocus="if (this.value == \'search...\') {this.value = \'\';}" ', $search["search_block_form"]);


$search["actions"] = '<input id="search-submit-topbar" rel="tooltip" data-placement="bottom" data-original-title="' . t('Click to search') . '" type="image" src="' .  base_path() . path_to_theme() . '/img/search-icon.png" height="14" width="13" border="0" a="Search" />';

?>

<div class="container-inline">
<?php
  print $search["search_block_form"];
  print $search['actions'];
  print $search["hidden"];  
  
  if (isset($search['extra_field'])): ?>
    <div class="extra-field">
      <?php print $search['extra_field']; ?>
    </div>
  <?php endif; ?>
</div>