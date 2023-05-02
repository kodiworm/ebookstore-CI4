<?php $this->load->view('templates/header'); ?>
<br><br><br><br><br><br><br>

<!-- OPENING SLIDESHOW -->
<?php //$this->load->view('components/carousel_view'); ?>
<!-- OPENING SLIDESHOW -->

<div class="container mb-4 p-4 bg-light">
    <h1><?= $title ?></h1>
    <hr>

	<!-- List All Products -->
	<div class="row col-lg col-md-12 col-sm-12 col-xs-12">
		<?php if(!empty($data)) : ?>
		<?php foreach($data as $row) : ?>
			<div class="card col-lg-3 pt-1 mt-1 mb-3" >
				<?php
					$imgURL = base_url().'assets/images/'.$row['image'];
				?>
				<img src="<?= $imgURL ?>" alt="card-image" class="card-img-top" height="200">
				<div class="card-body">
					<h5 class="card-title"><?= $row['name'] ?></h5>
					<p class="card-text"><?= $row['name'] ?></p>
					<div class="row">
						<p class="col-lg-8" style="color: #cf1717;"><?= $row['price'] ?></p>
						<a href="<?= base_url('products/addToCart/'.$row['id']) ?>" class="btn btn-sell col-lg-4">Order</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php endif; ?>

	</div>

</div>
<br>
<?php $this->load->view('templates/footer'); ?>
