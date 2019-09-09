<div class="newsletter-wrapper">
	<div class="container"> 
		<div class="newsletter">
			<h5 class="news-title"><?php echo $heading_title; ?></h5>
			<div class="newsright">
				<form method="post">
					<div class="form-group required">
						<label class="col-sm-2 control-label"><?php echo $text_email; ?></label>
						<div class="input-news">
						  <input type="email" name="txtemail" id="txtemail" value="" placeholder="<?php echo $text_placeholder; ?>" class="form-control input-lg" />
						</div>
						<div class="subscribe-btn">
						  <button type="submit" class="btn btn-default btn-lg" onclick="return subscribe();"><?php echo $text_subscribe; ?></button>  
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>