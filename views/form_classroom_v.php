<form method="post"
 action="
<?php
if(isset($data['id_classroom'])){
	echo BASE_URL."index.php/Classroom/validFormUpdateClassroom";
}else{
	echo BASE_URL."index.php/Classroom/validFormCreateClassroom";
} 
?>
"
>
 
	<fieldset>
		<legend><?php
if(isset($data['id_classroom'])){
	echo "Edit Classroom";
}else{
	echo "Add Classroom";
} 
?></legend>
		<label><input  name="id_classroom"  type="hidden"  value="<?php  if(isset($data['id_classroom'])) echo $data['id_classroom'];  ?>"   /></label>
		<label>Classroom
			<input autofocus name="name_classroom"  type="text"  size="18" value="<?php  if(isset($data['name_classroom'])) echo $data['name_classroom'];  ?>"  />
			<?php  if(isset($errors['name_classroom']))  	echo '<small class="error">'.$errors['name_classroom'].'</small>';  ?>
		</label>
		<input type="submit"  class="button" name="btn_Classroom" value="Save" />
	</fieldset>	
</form>