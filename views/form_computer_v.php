<form method="post"
 action="
<?php
if(isset($data['id_computer'])){
	echo BASE_URL."index.php/Computer/validFormUpdateComputer";
}else{
	echo BASE_URL."index.php/Computer/validFormCreateComputer";
} 
?>
"
>
 
 		<?php  if(isset($errors['empty_fields']))  	echo '<small class="error">'.$errors['empty_fields'].'</small>';  ?>
	<fieldset>
		<legend><?php
if(isset($data['id_computer'])){
	echo "Edit Computer";
}else{
	echo "Add Computer";
} 
?></legend>
		<label><input name="id_computer"  type="hidden" value="<?php  if(isset($data['id_computer'])) echo $data['id_computer'];  ?>"  /></label>
		<label>Type
			<input autofocus name="type_computer"  type="text"  size="18" value="<?php  if(isset($data['type_computer'])) echo $data['type_computer'];  ?>"  />
			<?php  if(isset($errors['type_computer']))  	echo '<small class="error">'.$errors['type_computer'].'</small>';  ?>
		</label>
		<label>Name
			<input name="name_computer"  type="text"  size="18"  value="<?php if(isset($data['name_computer'])) echo $data['name_computer'];  ?>" />
			<?php if(isset($errors['name_computer'])) 	echo '<small class="error">'.$errors['name_computer'].'</small>';  ?>
		</label>
		<label>RAM
			<input name="ram_computer"  type="text"  size="18"  value="<?php if(isset($data['ram_computer'])) echo $data['ram_computer'];  ?>" />
			<?php if(isset($errors['ram_computer'])) 	echo '<small class="error">'.$errors['ram_computer'].'</small>';  ?>
		</label>
		<label>Date buy
			<input name="date_buy_computer"  type="date"  size="18"  value="<?php  if(isset($data['date_buy_computer'])) echo $data['date_buy_computer'];  ?>" />
			<?php  if(isset($errors['date_buy_computer'])) 	echo '<small class="error">'.$errors['date_buy_computer'].'</small>';  ?>
		</label>
		<label>Classroom
			<select name="id_classroom">
				<?php  foreach($dropDownClassroom  as $key=>$value) :  ?>
					<option value="<?php  echo $key;  ?>"  <?php  if(isset($data['id_classroom'])  and $data['id_classroom']==$key):  ?> selected="selected" <?php  endif;  ?> >
					<?php  echo $value;  ?>
					</option>
				<?php  endforeach;  ?>
			</select>
			<?php if(isset($errors['id_classroom'])) 	echo '<small class="error">'.$errors['id_classroom'].'</small>';  ?>
		</label>
		<input type="submit"  class="button" name="btn_Computer" value="Save" />
	</fieldset>	
</form>