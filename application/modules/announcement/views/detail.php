<div class="container">
	<div class="col-sm-8">
		<h1><?php echo $title;?></h1>
		<div>
			<p class="blog-post-meta">
				<span data-toggle="tooltip" title="" ><?php  echo $announcement_detail['added_date']?></span>
			</p>
			<div class="lead">
				<?php echo $announcement_detail['detail'];?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
        <?php $this->load->view('home/_layouts/indices');?>
        <?php $this->load->view('home/_layouts/gainers');?>
        <?php $this->load->view('home/_layouts/losers');?>
    </div>
</div>
