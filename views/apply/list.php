	<table>
        <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>sex</th>
        <th colspan="2">action</th>
        </tr>
<?php 
	foreach($this->applicant as $key => $value){
		print '<tr>';
		print '<td>'.$value['id'].'</td>';
		print '<td>'.$value['firstname'].'</td>';
		print '<td>'.$value['lastname'].'</td>';
		print '<td>'.$value['sex'].'</td>';
		print '<td><a href="'.URL.'/apply/edit/'.$value['id'].'">Edit</a></td>';
		print '<td><a href="'.URL.'/apply/delete/'.$value['id'].'">Delete</a></td>';
		print '</tr>';
	}
	//print_r($this->userList);
?>
		<tr>
<?php print '<td colspan="6"><a href="'.URL.'/student/add">Add</a></td>'; ?>
		</tr>
	</table>        
