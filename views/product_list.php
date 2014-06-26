<div class="itemdiv">
	<? foreach($products->items as $product): ?>
	<div class="item">
		<div class="itemImage">
			<img src="<?=$product['image'] ?>" alt="">
		</div>
		<div class="itemInfo">
			<h3><?=$product['name']?></h3>
			<p class="price">$<?=$product['price']?></p>

			<?=Form::open('add_to_cart.php')?>
				<?=Form::hidden('id', $product['id'])?>
				<?=Form::label('quantity', 'Quantity:')?>
				<?=Form::number('quantity', '1', 'min="1"')?>
				<?=Form::submit('Order')?>
			<?=Form::close()?>
		</div>
	</div>
	<? endforeach; ?>
</div>