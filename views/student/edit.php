<script type="text/javascript" language="javascript">
$(document).ready(function (e){
	$("#file").click(function(e) {
		$("#photo_upload").trigger('click');
		e.preventDefault();
	});
});
</script>

		<form method="post" action="<?php echo URL;?>/student/editSave/<?php echo $this->student['id'];?>" enctype="multipart/form-data">
        <table>
			<tr>
				<td colspan="6">
					<a href="#" id="file"><img id="photo" title="Student Photo" src="<?php echo URL;?>/locale/images/no-photo.jpg" style="height:150px;border-width:0px;" /></a>
					
					<input type="file" name="photo" id="photo_upload" style="visibilty:hidden; width:0; height:0;" accept="image/*" />
			</td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input name="firstname" type="text" value="<?php echo $this->student['firstname'];?>"/></td>
				<td>Middle Name:</td>
				<td><input name="middlename" type="text" value="<?php echo $this->student['middlename'];?>"/></td>
				<td>Last Name:</td>
				<td><input name="lastname" type="text" value="<?php echo $this->student['lastname'];?>"/></td>
			</tr>
			<tr>
				<td>Sex:</td>
				<td><select name="sex" >
				<option value="f" <?php if($this->student['sex']=='f') echo 'selected';?>>Female</option>
				<option value="m" <?php if($this->student['sex']=='m') echo 'selected';?>>Male</option>
				</select></td>
				<td>Birthday:</td>
				<td><input name="birthday" type="text" value="<?php echo $this->student['dateofbirth'];?>"/></td>
				<td>Age:</td>
				<td><input name="age" type="text" value="<?php echo $this->student['age'];?>"/></td>
			</tr>
			<tr>
				<td>Grade:</td>
				<td><input name="grade" type="text" value="<?php echo $this->student['grade'];?>"/></td>
				<td>Expected Grade:</td>
				<td><input name="exgrade" type="text" value="<?php echo $this->student['exgrade'];?>"/></td>
				<td>Address:</td>
				<td><textarea name="address" rows="2" cols="20"><?php echo $this->student['address'];?></textarea></td>
			</tr>
			<tr>
				<td colspan="4"><button type="submit">Save</button></td>
			</tr>
		</table>
		</form>		
