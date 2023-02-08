	<tr>
	<th><?=$row['id'] ?? '';?></th>
	<th><?=$row['category'] ?? '';?></th>
	<th>
		<?php if($row['is_active'] == 1):?>
			<span class="badge badge-success">enabled</span>
		<?php else:?>
			<span class="badge badge-danger">disabled</span>
		<?php endif;?>
	</th>
	<th>
		<?php if($row['is_active'] == 0):?>
			<a  href="<?=base_url().'admin/categories/enable/'.$row['catid']?>" type="button" class="btn btn-warning text-white btn-sm " title="Change Status">
				<i class="fa fa-battery-half"></i>
			</a>
		<?php else:?>
			<a  href="<?=base_url().'admin/categories/disable/'.$row['catid']?>" type="button" class="btn btn-warning text-white btn-sm " title="Change Status">
				<i class="fa fa-battery-half"></i>
			</a>
		<?php endif;?>

		<a type="button" class="btn btn-primary text-white btn-sm " title="Edit Service">
			<i class="fa fa-battery-half"></i>
		</a>
		<a href="<?=base_url().'admin/categories/delete/'.$row['catid']?>" type="button" class="btn btn-danger text-white btn-sm " title="Delete Service">
			<i class="fa fa-trash"></i>
		</a>
	</th>
	</tr>
