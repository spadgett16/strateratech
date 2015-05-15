<?php
$close = t('close');
?>

<div tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="myModal" class="clearfix modal hide fade in <?php print $classes; ?>"<?php print $attributes; ?>>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		×
	</button>
	<?php if (!empty($block->subject)): ?>
		<h3 class="blocktitle"><?php print $block->subject ?></h3>
	<?php endif;?>
</div>


	<div class="modal-body content">
		<?php print $content; ?>
	</div>

	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			<?php print $close ?>
		</button>
	</div>

</div>