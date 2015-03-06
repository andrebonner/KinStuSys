<div id="content">
<h3><?php echo $this->data['title']; ?></h3>
<?php echo $this->data['description']; ?><br /><br />
<form method="post" action="<?php echo URL;?>/user/create">
<label>Login</label><input type="text" id="login" name="login"/><br/>
<label>Password</label><input type="text" id="password" name="password"/><br/>
<label>Role</label>
<select id="role" name="role">
<option value="1">Default</option>
<option value="2">Administrator</option>
</select><br/>
<label>&nbsp;</label><button type="submit" value="">Submit</button>
</form>
<hr/>
<table>
<?php 
	foreach($this->userList as $key => $value){
		print '<tr>';
		print '<td>'.$value['id'].'</td>';
		print '<td>'.$value['login'].'</td>';
		print '<td>'.$value['role'].'</td>';
		print '<td><a href="'.URL.'/user/edit/'.$value['id'].'">Edit</a></td>';
		print '<td><a href="'.URL.'/user/delete/'.$value['id'].'">Delete</a></td>';
		print '</tr>';
	}
	//print_r($this->userList);
?>
</table>
</div>	
