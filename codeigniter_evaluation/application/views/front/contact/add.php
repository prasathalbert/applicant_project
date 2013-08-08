<form action="<?php echo site_url("contact/save"); ?>" method="POST">
<?php
echo getFlashMsg();
	echo getErrorMsg($error);
?>
<table cellpadding="10" cellspacing="10" style="border: 1px solid">
    <tr><th colspan="2">Contact Form</th></tr>
    <tr><td>Name</td><td><input type="text" name="username" value="<?php echo $this->input->post("username");?>" /></td></tr>
    <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $this->input->post("email");?>" /></td></tr>
    <tr><td colspan="2"><input type="submit" name="save" value="Add" /></td></tr>
</table>
</form>