<div id="content">
<h3><?php echo $this->data['title']; ?></h3>
<?php echo $this->data['description']; ?><br />
<?php echo !isset($this->blah)?'blah': $this->blah; ?>
</div>
<div id="test">Test</div>	
<script type="text/javascript">$('#test').hide(3000);</script>
