
<?php
echo getFlashMsg();
	echo getErrorMsg($error);
?>
<a href="<?php echo site_url('contact') ?>">Back</a>
<?php if($user_list!=false)
{ ?>
<table cellpadding="10" cellspacing="10" style="border: 1px solid">
    <tr><th colspan="4">Contact Form</th></tr>
    <?php $inc=1; foreach($user_list->result() as $ul)
	{ ?>
    <tr><td>Name</td><td><?php echo $ul->name; ?></td><td>Email</td><td><?php echo $ul->email; ?></td></tr>
    <?php } ?>
</table>

<?php } ?>