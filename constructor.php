<?php 

// jualan produk
// komik 
// game

   
   // class
class produk {
	// property
	public $judul ,
	       $penulis ,
	       $penerbit ,
	       $harga ;

  // constructor
         public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
          // memanggil property
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;

       
         }

	// method
	       public function getlabel(){
	       	return "$this->penulis, $this->penerbit";

	       }

}

   // instansiasi
  $produk1 = new produk("naruto", "massashi kishimoto", "shonen jump" ,30000 );
  $produk2 = new produk("uncharted", "neil drackman", "sony computer", 25000);
  $produk3 = new produk("dragon ball");
 
  echo "Komik :". $produk1->getlabel();
  echo "<br>";
  echo "Game :". $produk2->getlabel();
  echo "<br>";
  var_dump($produk3);


 ?>