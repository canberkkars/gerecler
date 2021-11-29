<?php
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 minute")); //DAKIKA
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 hours"));  //SAAT
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 days"));   //GUN
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 weeks"));  //HAFTA
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 month"));  //AY
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 year"));   //YIL

//*****ORNEK * BASLANGICI*****//
/* 1 YIL SONRASI
$simdiki_tarih = date("Ymd");
$yeni_tarih = date("Y.m.d", strtotime($simdiki_tarih . '+1 year')); 

echo $yeni_tarih;
*/

/* 1 YIL ONCE
$simdiki_tarih = date("Ymd");
$yeni_tarih = date("Y.m.d", strtotime($simdiki_tarih . '-1 years')); 

echo $yeni_tarih;
*/
//*****ORNEK * BITISI*****//
