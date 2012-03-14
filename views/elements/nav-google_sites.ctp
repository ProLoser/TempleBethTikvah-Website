<?php if (!empty($navGoogleSites)): ?>
<li class="sublist">Class Sites<ul>
<?php foreach($navGoogleSites as $googleSite): ?>	
	<li><?php echo $html->link(
		$googleSite['GoogleAppSite']['name'], 
		'http://sites.google.com/a/templebethtikvah.com/'.$googleSite['GoogleAppSite']['url'], 
		array('title'=>str_replace("\r\n",'',strip_tags($googleSite['GoogleAppSite']['description'])))
	); ?></li>
<?php endforeach; ?>
</ul></li>
<?php endif; ?>