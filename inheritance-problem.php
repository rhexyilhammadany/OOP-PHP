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
	       $harga ,
         $jmlHalaman,
         $waktuMain,
         $tipe;

  // constructor
         public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
          // memanggil property
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
          $this->jmlHalaman = $jmlHalaman;
          $this->waktuMain =$waktuMain;
          $this->tipe =$tipe;

       
         }

	// method
	       public function getlabel(){
	       	return "$this->penulis, $this->penerbit";

	       }

         public function getInfoLengkap(){
          $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
          if ($this -> tipe == "komik") {
            $str .= "-{$this->jmlHalaman} Halaman.";
          }elseif ($this->tipe == "game") {
            $str .= "~{$this->waktuMain} jam.";
          }


          return $str;

         }

}

//class baru
class CetakInfoProduk {
  public function cetak (produk $produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})"; 
    return $str; 
  }
}


   // instansiasi
  $produk1 = new produk("naruto", "massashi kishimoto", "shonen jump" ,30000 , 100, 0, "komik");
  $produk2 = new produk("uncharted", "neil drackman", "sony computer", 25000 , 0, 50, "game");
 
  echo $produk1->getInfoLengkap();
  echo "<br>";
  echo $produk2->getInfoLengkap();

 ?>