<div id="nav"> 
	<ul>
		<li><?php echo $html->link('Home','/') ?></li>
		<li id="nav-about"><?php echo $html->link('About TBT',array('controller'=>'pages','action'=>'history'), array('class'=>'sublist')) ?><ul>
			<li><?php echo $html->link('History',array('controller'=>'pages','action'=>'history')) ?></li>
			<li><?php echo $html->link('Staff & Leadership',array('controller'=>'pages','action'=>'leadership')) ?></li>
			<li><?php echo $html->link('Monthly Newsletter','/files/scroll/'.$latestScroll['Scroll']['scroll_file_name'],array('class' => 'pdf', 'target' => '_blank')); ?></li>
			<li><?php echo $html->link('Sisterhood',array('controller'=>'pages','action'=>'sisterhood')) ?></li>
			<li><?php echo $html->link('Gift Shop',array('controller'=>'pages','action'=>'gift_shop')) ?></li>
			<li id="nav-mensclub"><?php echo $html->link('Men\'s Club', array('controller' => 'pages', 'action' => 'mens_club'), array('class'=>'sublist'))?><ul>
				<li><?php echo $html->link('Home', array('controller' => 'pages', 'action' => 'mens_club'))?></li>
				<li><?php echo $html->link('Purpose', array('controller' => 'pages', 'action' => 'mens_club', 'purpose'))?></li>
				<li><?php echo $html->link('Membership', array('controller' => 'pages', 'action' => 'mens_club', 'membership'))?></li>
				<li><?php echo $this->Html->link('Member Application', '/Mens_Club_Flyer.pdf', array('class' => 'pdf', 'target' => '_blank'));?></li>
				<li><?php echo $this->Html->link('Scroll Article', array('controller' => 'messages', 'action' => 'mens_club'))?></li>
				<li><?php echo $html->link('Calendar', array('controller' => 'pages', 'action' => 'mens_club', 'calendar'))?></li>
				<li><?php echo $html->link('Photos', array('controller' => 'pages', 'action' => 'mens_club', 'photos'))?></li>
				<li><?php echo $html->link('Contact Us', array('controller' => 'pages', 'action' => 'mens_club', 'contact_us'))?></li>
			</ul></li>
			<li id="nav-archives"><a class="sublist">Archives</a><ul>
				<li><?php echo $html->link('Messages',array('controller'=>'messages','action'=>'index')) ?></li>
				<li><?php echo $html->link('Scrolls',array('controller'=>'scrolls','action'=>'index')) ?></li>
				<li><?php echo $html->link('Sermons',array('controller'=>'sermons','action'=>'index')) ?></li>
				<li><?php echo $html->link('Yartzeits',array('controller'=>'yartzeits','action'=>'index')) ?></li>
				<li><?php echo $html->link('Smachot',array('controller'=>'smachot','action'=>'index')) ?></li>
				<li><?php echo $html->link('Temple Wish List',array('controller'=>'wish_list_items','action'=>'index')) ?></li>
			</ul></li>
			<li><a href="http://gallery.templebethtikvah.com/">Photo Gallery</a></li>
			<li id="nav-prospective"><a class="sublist">For Prospective Members</a><ul>
				<li><?php echo $html->link('Why Join TBT?',array('controller'=>'pages','action'=>'why_belong')) ?></li>
				<li><?php echo $html->link('Messages from TBT Leadership',array('controller'=>'pages','action'=>'messages_from_leadership')) ?></li>
				<li><?php echo $html->link('Outreach',array('controller'=>'pages','action'=>'messages_from_leadership','#outreach')) ?></li>
				<li><?php echo $this->Html->link('Membership Forms', array('controller' => 'pages', 'action' => 'membership'))?></li>
			</ul></li>
		</ul></li>
		<li><?php echo $this->Html->link('Worship / Religious Life', '', array('class'=>'sublist'));?><ul>
			<li><?php echo $html->link('Clergy',array('controller'=>'messages','action'=>'monthly')) ?></li>
			<li><?php echo $html->link('Schedule of Services',array('controller'=>'pages','action'=>'services')) ?></li>
			<li><?php echo $html->link('Prayers',array('controller'=>'prayers','action'=>'index')) ?></li>
			<li><?php echo $html->link('Adult Choir Music',array('controller'=>'choir_songs','action'=>'index')) ?></li>
			<li><?php echo $html->link('Junior Choir Music',array('controller'=>'choir_songs','action'=>'index', 'Junior+Choir')) ?></li>
			<li><?php echo $html->link('High Holiday Music',array('controller'=>'choir_songs','action'=>'index', 'High+Holidays')) ?></li>
		</ul></li>
		<li><?php echo $this->Html->link('Education & Youth', '', array('class'=>'sublist'));?><ul>
			<li class="sublist"><a>Religious School</a><ul>
			</ul></li>
			<li id="nav-eclc"><?php echo $html->link('ECLC',array('controller'=>'pages','action'=>'eclc'), array('class'=>'sublist')) ?><ul>
				<li><?php echo $html->link('Philosophy',array('controller'=>'pages','action'=>'eclc','#philosophy')) ?></li>
				<li><?php echo $html->link('Staff',array('controller'=>'pages','action'=>'eclc','#staff')) ?></li>
				<li><?php echo $html->link('Activities',array('controller'=>'pages','action'=>'eclc','#activities')) ?></li>
				<li><?php echo $html->link('Student pictures',array('controller'=>'pages','action'=>'eclc','#pictures')) ?></li>
			</ul></li>
			<li id="nav-iggyyouth"><?php echo $html->link('Youth Group - IGGGY',array('controller'=>'pages','action'=>'iggy_youth/home'), array('class'=>'sublist')) ?><ul>
				<li><?php echo $html->link('Home',array('controller'=>'pages','action'=>'iggy_youth/home')) ?></li>
				<li><?php echo $html->link('Advisors',array('controller'=>'iggy_advisors','action'=>'index')) ?></li>
				<li><?php echo $html->link('IGGGY Post',array('controller'=>'iggy_posts','action'=>'index')) ?></li>
				<li><?php echo $html->link('Membership Papers','/YouthGroup2009-2010forms.doc', array('class' => 'pdf', 'target' => '_blank')) ?></li>
				<li><?php echo $html->link('Picture Gallery','http://iggygallery.templebethtikvah.com') ?></li>
				<li><?php echo $html->link('Contact Us',array('controller'=>'contact_us_emails','action'=>'index', 'IGGY+Youth')) ?></li>
			</ul></li>
			<li><a class="sublist">Adult Education</a><ul>
				<li><a>Torah Study</a></li>
				<li><a>Ongoing Adult Education Classes</a></li>
			</ul></li>
		</ul></li>
		<li><?php echo $this->Html->link('Facility', array('controller' => 'pages', 'action' => 'facility'));?></li>
		<li><?php echo $html->link('Calendar & Events',array('controller'=>'pages','action'=>'calendar')) ?></li>
		<li id="nav-contact"><?php echo $html->link('Contact Us',array('controller'=>'contact_us_emails','action'=>'index')) ?></li>
		<?php /*
		
		<li id="nav-rabbimessage"><?php echo $html->link('Rabbi\'s Weekly Message',array('controller'=>'messages','action'=>'weekly')) ?></li>
		<?php echo $this->element('nav-school')?>
		<li id="nav-monthly" class="sublist"><?php echo $html->link('Monthly Messages',array('controller'=>'messages','action'=>'monthly')) ?><ul>
			<li><?php echo $html->link('Rabbi',array('controller'=>'messages','action'=>'monthly','#rabbi')) ?></li>
			<li><?php echo $html->link('President',array('controller'=>'messages','action'=>'monthly','#president')) ?></li>
			<li><?php echo $html->link('ECLC',array('controller'=>'messages','action'=>'monthly','#eclc')) ?></li>
			<li><?php echo $html->link('Religious School',array('controller'=>'messages','action'=>'monthly','#religiousSchool')) ?></li>
			<li><?php echo $html->link('Men\'s Club',array('controller'=>'messages','action'=>'monthly','#mensClub')) ?></li>
			<li><?php echo $html->link('Sisterhood',array('controller'=>'messages','action'=>'monthly','#sisterhood')) ?></li>
		</ul></li>	
		<li id="nav-leadership" class="sublist"><?php echo $html->link('Clergy, Staff, Leadership',array('controller'=>'pages','action'=>'leadership')) ?><ul>
			<li><?php echo $html->link('Rabbi Asa',array('controller'=>'pages','action'=>'leadership','#rabbiasa')) ?></li>
			<li><?php echo $html->link('Rabbi Milhander',array('controller'=>'pages','action'=>'leadership','#rabbimilhander')) ?></li>
			<li><?php echo $html->link('Cantor Avdee',array('controller'=>'pages','action'=>'leadership','#cantor')) ?></li>
			<li><?php echo $html->link('Administrator/Educator',array('controller'=>'pages','action'=>'leadership','#educator')) ?></li>
			<li style="display:none"><?php echo $html->link('ECLC',array('controller'=>'pages','action'=>'leadership','#eclc')) ?></li>
			<li><?php echo $html->link('Office Staff & Custodians',array('controller'=>'pages','action'=>'leadership','#office')) ?></li>
			<li><?php echo $html->link('Board Members',array('controller'=>'board_members','action'=>'index')) ?></li>
		</ul></li>
		
		<li><?php echo $html->link('Live Services',array('controller'=>'guestbooks','action'=>'add')) ?></li>
		
		<li>
			<a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=350');"><img style="float: right; margin-top: -4px;" src="https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif" height="24px" alt="Acceptance Mark"></a>
			<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=admin@templebethtikvah.com&amp;item_name=Temple+Beth+Tikvah&amp;no_shipping=0&amp;no_note=1&amp;currency_code=USD&amp;tax=0&amp;lc=US&amp;bn=PP-DonationsBF&amp;submit">Donate</a>
		</li>
		<li class="sublist">Interesting Sites<ul>
			<li><a href="http://urj.org/index.cfm?">Union for Reform Judaism</a></li>
			<li><a href="http://www.orgsites.com/ca/fima">Fullerton Interfaith Ministerial Association</a></li>
			<li><a href="http://jewishorangecounty.org">Jewish Federation Orange County</a></li>
			<li><a href="http://www.tbe-anaheimoc.org/EzraCenter.htm">Ezra Center</a></li>
			<li><a href="http://www.ocjbd.com/">Orange County Jewish Business Directory</a></li>
			<li><a href="http://www.fies.us/">Fullerton Interfaith Emergency Service</a></li>
		</ul></li>
		*/ ?>
	</ul>
</div>