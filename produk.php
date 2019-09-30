<?php 

// jualan produk
// komik 
// game

   
   // class
class produk {
	// property
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	// method

	       public function getlabel(){
	       	return "$this->penulis, $this->penerbit";

	       }

}

   // instansiasi
  $produk3 = new produk();
  $produk3-> judul = "naruto";
  $produk3-> penulis = "massashi kishimoto";
  $produk3-> penerbit = "shonen jump";
  $produk3-> harga = "30000";


  $produk4 = new produk();
  $produk4-> judul = "uncharted";
  $produk4-> penulis = "neil drackman";
  $produk4-> penerbit = "sony computer";
  $produk4-> harga = "25000";

  echo "Komik :". $produk3->getlabel();
  echo "<br>";
  echo "Game :". $produk4->getlabel();


 ?>