<?php set_title('Website informatie');
	  default_header(); ?>
<dl>
	<dt>Commit</dt>
	<dd><?php echo $cfg['release']['tag']; ?></dd>
	<dt>Commit op</dt>
	<dd><?php echo date('d M Y H:i:s', $cfg['release']['date']); ?></dd>
	<dt>Door</dt>
	<dd><?php echo $cfg['release']['by']; ?></dd>
	<dt>Op de branch</dt>
	<dd><?php echo $cfg['release']['branch']; ?></dd>
</dl>

<?php default_footer(); ?>