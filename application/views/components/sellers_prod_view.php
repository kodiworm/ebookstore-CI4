 
<!-- List All Products -->
<div class="row col-lg">
		<?php if(!empty($data)) : ?>
		<?php foreach($data as $row) : ?>
			<div class="card col-lg-3 mb-4">
				<img src="<?= base_url().'uploads/images/'.$row->image ?>" alt="" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title"><?= $row->name ?></h5>
					<p class="card-text"><?= $row->name ?></p>
					<div class="row p-2">
						<p class="card-text text-danger" >KES <?= $row->price ?></p>
						<a href="<?= base_url('products/addToCart/'.$row->id) ?>" class="btn btn-sell">Order</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
