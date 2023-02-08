	<tr>
	<th>
		<?php if($row['image']):?>
			<img src="<?=base_url($row['image'])?>" alt="image" width="80" class="rounded">
		<?php else:?>
			<img src="<?=base_url('assets/front/images/no_image.jpg')?>" alt="image" width="80" class="rounded">
		<?php endif;?>
	</th>
	<th><?=$row['title'] ?? '';?></th>
	<th><?=$row['category'] ?? '';?></th>
	<th><?=$row['price'] ?? '0';?></th>
	<th>
		<?php if($row['published'] == 1):?>
			<span class="badge badge-success">Published</span>
		<?php else:?>
			<span class="badge badge-danger">Pending</span>
		<?php endif;?>
	</th>
	<th><?=$row['firstname'].' '.$row['lastname']?? '';?></th>
	<th>
		<div class="dropright dropright">
			<button type="button" class="btn btn-sm btn-outline-primary rounded-pill btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-ellipsis-v "></i>
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item"href="<?=base_url().'admin/courses/edit/'.$row['courseid']?>">Edit This Course</a></li>

				<?php if($row['published'] == 0):?>
					<li><a  type="button" class="dropdown-item" href="<?=base_url().'admin/courses/enable/'.$row['courseid']?>" >Publish This Course</a></li>
				<?php else:?>
					<li><a  type="button" class="dropdown-item" href="<?=base_url().'admin/courses/disable/'.$row['courseid']?>" >Disable This Course</a></li>
				<?php endif;?>

				<li><a class="dropdown-item" href="<?=base_url().'admin/courses/delete/'.$row['courseid']?>"><i class="fa fa-trash"></i> Delete This Course</a></li>
			</ul>
		</div>
	</th>
	</tr>
