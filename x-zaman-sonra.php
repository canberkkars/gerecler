<?php
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 minute")); //DAKIKA
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 hours"));  //SAAT
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 days"));   //GUN
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 weeks"));  //HAFTA
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 month"));  //AY
echo date("Y-m-d", strtotime(date("Y-m-d") . "+1 year"));   //YIL
