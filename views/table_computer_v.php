<br />
<div class="row">
	<table  align="center">
		<caption>Computers List</caption>
		<thead>
			<tr>
				<th>id</th><th>Type</th><th>Name</th><th>RAM</th><th>Date buy</th><th>Classroom</th><th></th>
			</tr>
		</thead>
		<tbody>
		<?php if(isset($readAllComputers[0])): ?>
			<?php foreach ($readAllComputers as $value): ?>
				<tr>
					<td>
						<?= $value['id_computer']; ?>
					</td>
					<td>
						<?= $value['type_computer']; ?>
					</td>
					<td>
						<?= $value['name_computer']; ?>
					</td>
					<td>
						<?= $value['ram_computer']; ?>
					</td>
					<td>
						<?= $value['date_buy_computer']; ?>
					</td>
					<td>
						<?= $value['name_classroom']; ?>
					</td>
				
					<td>
						<a class="button  info" href="<?php echo BASE_URL?>index.php/Computer/updateComputer/<?= $value['id_computer']; ?>">Update</a>
						<a class="button" onClick="return confirm('Are you sure to delete ?')" href="<?php echo BASE_URL?>index.php/Computer/deleteComputer/<?= $value['id_computer']; ?>">Delete</a>
					</td>
				
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		<tbody>
	</table>
	<a  class="button info" href="<?= BASE_URL; ?>index.php/Computer/createComputer/"> Add Computer </a>
</div>

