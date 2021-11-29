 <?php
  function kategoriGetir($kategori_id, $neistedi){ global $db;
	$kategorisor	=  $db->prepare("SELECT * FROM kategoriler WHERE id = :id");
	$kategorisor	-> execute(array("id"=> $kategori_id));
	$kategori		=  $kategorisor->fetch(PDO::FETCH_ASSOC);

	if ($neistedi == "kategori_adi"){ return $kategori["ad"]; }
	elseif($neistedi == "kategori_seo"){ return $kategori["kategori_seo"]; }
	}
//*****ORNEK * BASLANGICI*****//
echo kategoriGetir($veri["id"],"kategori_adi");
//*****ORNEK * BITISI*****//
