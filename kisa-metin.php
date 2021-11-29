<?php
	function kisaMetin($kelime, $str = 10){
		if (strlen($kelime) > $str)
		{
			if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'..';
			else $kelime = substr($kelime, 0, $str).'..';
		}
		$text = strip_tags($kelime);
		return $text;
	}

//*****ORNEK * BASLANGICI*****//
echo kisaMetin("buraya kısaltılmak istenilen veri yazdirilacak.");
//*****ORNEK * BITISI*****//
