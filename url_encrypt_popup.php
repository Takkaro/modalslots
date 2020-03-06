<?php

$sites	=	array(
	'page1.html'	=>	'http://domain.com',
	'page2.html'		=>	'http://domain.com',
	'page3.html'		=>	'http://domain.com'
);

foreach ($sites as $nom_cas=>$real_url) {
		if ($nom_cas == $_POST['go']) {
				print 	$real_url;
				break;
		}
}