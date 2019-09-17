<br />
<div class="row">
	<table  align="center">
		<caption>Classrooms List</caption>
		<thead>
			<tr>
				<th>id</th><th>Classroom</th><th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($readAllClassrooms as $value): ?>
				<tr>
					<td>
						<?= $value['id_classroom']; ?>
					</td>
					<td>
						<?= $value['name_classroom']; ?>
					</td>
				
					<td>
						<a  class="button info"
						    href="<?= BASE_URL ;?>index.php/Classroom/updateClassroom/<?= $value['id_classroom']; ?>">
							Update
						</a>

						<a class="button" 
						   onClick="return confirm('Are you sure to delete ?')"   
						   href="<?= BASE_URL ;?>index.php/Classroom/deleteClassroom/<?= $value['id_classroom']; ?>">
						   Delete
						</a>
					</td>
					<?php //endif;?>
				</tr>
			<?php endforeach; ?>
		<tbody>
	</table>
	<a class="button info" href="<?=  BASE_URL ;?>index.php/Classroom/createClassroom/"> Add classroom </a>
</div>

