<?php echo $header; ?>
<div class="content-top">
	<div class="container">
		<?php echo $content_top; ?>
	</div>
</div>

<div class="row home_row">
  	<?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?>
</div>
	
<span class="ourcategory_default_width" style="display: none; visibility: hidden;"></span>
<span class="testimonial_default_width" style="display: none; visibility: hidden;"></span>

<?php echo $footer; ?>