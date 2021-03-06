<tr>
	<td>
		<a href="#">
			<img src="<?php echo $value['avatar'] ?>" class="img-thumbnail">
		</a>
	</td>

	<td>
		<p style="color: #999;">
			<?php echo $value['category_name'] ?>
		</p>
		<a class="tenSanPham-GioHang" href="<?php echo 'index.php?page=ChiTiet&id=' . $key ?>"
			style="font-size: large;">
			<?php echo $value['name'] ?>
		</a>
		<p style="color: #999;">
			<?php echo $value['author'] ?>
		</p>
	</td>

	<td>
		<div class="input-number">
			<input type="number" value="<?php echo $value['quantity'] ?>">
			<span class="qty-up">+</span>
			<span class="qty-down">-</span>
		</div>
	</td>

	<td class="text-center">
		<div class="price-wrap">
			<var class="price">
				<?php echo number_format($value['price'], 0, '.', '.') . ' ₫' ?>
			</var>
		</div>
	</td>

	<td class="text-center">
		<strong class="tongTien1SP-GioHang">
			<?php echo number_format($value['price'] * $value['quantity'], 0, '.', '.') . ' ₫' ?>
		</strong>
	</td>

	<td class="text-right">
		<a href="#" id="removeProduct-Cart" onclick="<?php echo 'cartAction(\'remove\', \'' . $key .  '\')">' ?>
			<span>
				<svg fill="red" ; width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill="none" stroke="red" stroke-width="1.06" d="M16,16 L4,4"></path>
					<path fill="none" stroke="red" stroke-width="1.06" d="M16,4 L4,16"></path>
				</svg>
			</span>
		</a>
	</td>
</tr>