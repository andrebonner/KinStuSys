<div id="content">
<h3><?php echo $this->data['title']; ?> - Edit</h3>
<?php echo $this->data['description']; ?><br /><br />

<form method="post" action="<?php echo URL;?>/user/editSave/<?php echo $this->user['id']; ?>">
<label>Login</label><input type="text" id="login" name="login" value="<?php echo $this->user['login']; ?>"/><br/>
<label>Password</label><input type="text" id="password" name="password" value="<?php echo $this->user['password']; ?>"/><br/>
<label>Role</label>
<select id="role" name="role">
<option value="1" <?php if($this->user['role'] == '1') echo 'selected';?>>Default</option>
<option value="2" <?php if($this->user['role'] == '2') echo 'selected';?>>Administrator</option>
</select><br/>
<label>&nbsp;</label><button type="submit" value="">Submit</button>
</form>

</div>	
