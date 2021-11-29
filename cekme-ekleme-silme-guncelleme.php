<?php
  //COKLU VERI CEKIMI VE LISTELEME
  $kategori = $db->prepare("SELECT * FROM kategoriler ORDER BY id");
  $kategori->execute();
  if ( $kategori->rowCount() ){
    foreach( $kategori as $ama ){
      echo $ama["ad"];
    }
  }

  //COKLU VERI CEKIMI VE LISTELEME / DETAYLI
  $query = $db->prepare("SELECT * FROM urunler WHERE onay IN (:onay) AND hit = :hit ORDER BY gosterim ASC LIMIT :limit");
  $query->bindValue(':onay', (int) trim($onay), PDO::PARAM_INT);
  $query->bindValue(':hit', (int) trim($sadecehit), PDO::PARAM_INT);
  $query->bindValue(':limit', (int) trim($anasayfaaltlimit), PDO::PARAM_INT);
  $query->execute();
  if ( $query->rowCount() ){
    foreach( $query as $ama ){
      echp $ama["urun_adi"];
    }
  }



	//**ICERIK EKLEME
	$query = $db->prepare("INSERT INTO urunler SET eklenecek_bir = ?, eklenecek_iki = ?");
	$insert = $query->execute(array( $eklenecek_bir, $eklenecek_iki));
	if($insert){
		$last_id = $db->lastInsertId(); //SON INSERT EDILEN ID ALMA
		echo '{"sonuc":"tamam"}';
		echo "<script>window.location.href='./urunler.php?islem=duzenle&i=".$last_id."';</script>";
	}else{echo '{"sonuc":"yanlis"}';}		

  	//**ICERIK GUNCELLEME
	$query = $db->prepare("UPDATE urunler SET guncellenecek_bir = ?, guncellenecek_iki = ? WHERE id = ?");
	$update = $query->execute(array($guncellenecek_bir, $guncellenecek_iki, $id));
	if($update){
		echo '{"sonuc":"icerik-tamam"}';
	}else{echo '{"sonuc":"icerik-yanlis"}';}

  	//**ICERIK SILME
	$query = $db->prepare("DELETE FROM urunler WHERE urun_id = :urun_id");
	$delete = $query->execute(array(
	'urun_id' => $_GET['id']
	));
