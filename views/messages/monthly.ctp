<div class="messages monthly">
<h1>Monthly Messages</h1>	
			
<div>
	<?php echo $html->image('Portraits/Rabbi_Milhander.jpg',array('alt'=>'Rabbi Kenneth Milhander','class'=>'left')); ?>
	<h2 id="rabbi">Message from the Rabbi (<?php echo $time->format('F Y',$messages['monthlyRabbi']['Message']['published']); ?>)</h2>
	<?php echo $messages['monthlyRabbi']['Message']['message']; ?>
	<p>Kenneth Milhander</p>
</div>

<div>
	<?php echo $html->image('Portraits/President_BerkleyBen.jpg',array('alt'=>'President Ben Berkley','class'=>'right')); ?>
	<h2 id="president">Message from the President (<?php echo $time->format('F Y',$messages['monthlyPresident']['Message']['published']); ?>)</h2>
	<?php echo $messages['monthlyPresident']['Message']['message']; ?>
	<p>Ben Berkley</p>
</div>

<div>
	<?php echo $html->image('Portraits/ECLC_KarinCook.jpg',array('alt'=>'ECLC Karin Cook','class'=>'left')); ?>
	<h2 id="eclc">ECLC News (<?php echo $time->format('F Y',$messages['monthlyEclc']['Message']['published']); ?>)</h2>
	<?php echo $messages['monthlyEclc']['Message']['message']; ?>
	<p>Karin Cook</p>
</div>

<div>
	<?php echo $html->image('Portraits/ReligiousS_MiriamVanRaalte.jpg',array('alt'=>'Administrator / Educator Miriam Van Raalte','class'=>'right')); ?>
	<h2 id="religiousSchool">Religious School News (<?php echo $time->format('F Y',$messages['monthlyReligiousSchool']['Message']['published']); ?>)</h2>
	<?php echo $messages['monthlyReligiousSchool']['Message']['message']; ?>
	<p>Miriam Van Raalte</p>
</div>

<div>
	<?php // echo $html->image('Portraits/MensClub_MitchellShapiro.jpg',array('alt'=>'Men\'s Club President Mitchell Shapiro','class'=>'left')); ?>
	<h2 id="mensClub">Men's Club (<?php echo $time->format('F Y',$messages['monthlyMensClub']['Message']['published']); ?>)</h2>
	<?php echo $messages['monthlyMensClub']['Message']['message']; ?>
	<p>Mitchell Shapiro</p>
</div>

<div>
	<?php // $html->image('Portraits/Sisterhood_BarbarickReinstein.jpg',array('alt'=>'Sisterhood Lisa Barbarick & Diana Reinstein','class'=>'right')); ?>
	<h2 id="sisterhood">Sisterhood (<?php echo $time->format('F Y',$messages['monthlySisterhood']['Message']['published']); ?>)</h2>
	<?php echo $messages['monthlySisterhood']['Message']['message']; ?>
	<p>Diana Reinstein</p>
</div>
</div>