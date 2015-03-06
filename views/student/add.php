		<form method="post" action="<?php echo URL;?>/student/create">
        <table>
			<tr>
				<td>First Name:</td>
				<td><input name="firstname" type="text" value=""/></td>
				<td>Last Name:</td>
				<td><input name="lastname" type="text" value=""/></td>
			</tr>
			<tr>
				<td>Sex:</td>
				<td><select name="sex" >
				<option value="f">Female</option>
				<option value="m">Male</option>
				</select></td>
				<td>Age:</td>
				<td><input name="age" type="text" value=""/></td>
			</tr>
			<tr>
				<td colspan="4"><button type="submit">Add</button></td>
			</tr>
		</table>
		</form>		
