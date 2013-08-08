<form action="<?php echo site_url("contact/save"); ?>" method="POST">
<?php
echo getFlashMsg();
	echo getErrorMsg($error);
?>
<a href="<?php echo site_url('contact/add') ?>">Add New</a>

<?php if($user_list!=false)
{ ?>
<table cellpadding="10" cellspacing="10" style="border: 1px solid">
    <tr><th colspan="3">Contact Form</th></tr>
    <tr><td>Sl.No</td><td>Name</td><td>Email</td><td> &nbsp;</td></tr>
    <?php $inc=1; foreach($user_list->result() as $ul)
	{ ?>
    <tr><td><?php echo $inc; ?></td><td><a href="<?php echo site_url('contact/view/'.$ul->id); ?>"><?php echo $ul->name; ?></a></td><td><?php echo $ul->email; ?></td><td><a href="<?php echo site_url('contact/delete/'.$ul->id) ?>">Delete</a></td></tr>
    <?php $inc++; } ?>
</table>
<?php } ?>
</form>