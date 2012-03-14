<div class="sermons form">
<?php echo $form->create('Sermon',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add Sermon');?></legend>
	<?php 
		echo $form->input('title'); 
		echo $form->input('published');
		echo $form->input('audio',array('label' => 'Audio File', 'type'=>'file', 'between' => 'Max File Size: ' . ini_get('upload_max_filesize'), 'after' => 'It is <strong>highly</strong> recommended that you <a href="http://www.convertfiles.com/" title="Online Audio Converter">convert</a> <em>WAV</em> audio files to <em>MP3</em> format before uploading (~96kpbs)'));
		echo $form->input('text',array('label' => 'Text File', 'type'=>'file', 'between' => 'Max File Size: ' . ini_get('upload_max_filesize')));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Sermons', true), array('action'=>'index'));?></li>
	</ul>
</div>