<!-- Start cu3ox.com HEAD section -->
<script language="JavaScript" src="<?php echo base_url(); ?>engine/swfobject.js" type="text/javascript"></script>
<!-- End cu3ox.com HEAD section -->

<!-- Start cu3ox.com BODY section id=cu3ox1 -->
<div id="cu3ox1" style="width:960px;height:568px;margin:0 auto;text-align:center">
	<script language="JavaScript" type="text/javascript">
		var cu3oxId = ("cu3ox" + Math.random()).replace(".","");
		document.write('<div id ="' + cu3oxId + '" style="text-align:center;"><img src="<?php echo base_url(); ?>data/images1/1.jpg"/></div>');
		if (swfobject.getFlashPlayerVersion().major)
			swfobject.createSWF(
			  {data:"<?php echo base_url(); ?>engine/cu3ox.swf", width:"100%", height:"100%" },
			  {FlashVars:"images=<?php echo base_url(); ?>data/images1&cfgsuffix=1",menu:true, allowFullScreen:false, allowScriptAccess:'sameDomain', wmode:"transparent", bgcolor:'#FFFFFF', 
			   devicefont:false, scale:'noscale', loop:true, play:true, quality:'high'}, cu3oxId);
	</script>
	<a style="display:none" href="http://cu3ox.com">Free Flash Banner Creator Software by cu3ox.com v1.8</a><noscript>
		<!--[if !IE]> -->
		<object type="application/x-shockwave-flash" data="<?php echo base_url(); ?>engine/cu3ox.swf" width="100%" height="100%"  align="middle">
		<!-- <![endif]-->
		<!--[if IE]>
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0"
			width="100%" height="100%"  align="middle">
			<param name="movie" value="engine/cu3ox.swf" />
		<!-->
			<param name="FlashVars" value="images=<?php echo base_url(); ?>data/images1&cfgsuffix=1" />
			<param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" />
			<param name="quality" value="high"/><param name="scale" value="noscale"/>
			<param name="wmode" value="transparent" />	
			<param name="bgcolor" value="#ffffff" />	
			<img src="<?php echo base_url(); ?>data/images1/1.jpg"/>
		</object>
		<!-- <![endif]-->		
	</noscript>
</div>
<!-- End cu3ox.com BODY section -->