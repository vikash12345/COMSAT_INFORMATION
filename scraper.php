<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

	for($PageLoop = 100; $PageLoop < 103; $PageLoop++)
	{
	$html 	= file_get_html("ww3.comsats.edu.pk/alumni/SearchDetailsOutside.aspx?Id=".$PageLoop);
	$name  	=      $html->find('span[id="ctl00_ContentPlaceHolder1_DetailsView2_Label11"]',0)->plaintext;
	echo "$name\n";
	}

?>
