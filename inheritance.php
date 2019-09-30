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
         $waktuMain;
        

  // constructor
         public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
          // memanggil property
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
          $this->jmlHalaman = $jmlHalaman;
          $this->waktuMain =$waktuMain;
      

       
         }

	// method
	       public function getlabel(){
	       	return "$this->penulis, $this->penerbit";

	       }

         public function getInfoProduk(){
          $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
          
          return $str;

         }

}
// class inheritance
class komik extends produk{
  public function getInfoProduk (){
      $str = "komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}){$this->jmlHalaman} Halaman.";

      return $str;

  }
} 

class game extends produk{
  public function getInfoProduk (){
      $str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
      
      return $str;

  }

} 


class CetakInfoProduk {
  public function cetak (produk $produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})"; 
    return $str; 
  }
}


   // instansiasi
  $produk1 = new komik("naruto", "massashi kishimoto", "shonen jump" ,30000 , 100, 0);
  $produk2 = new game("uncharted", "neil drackman", "sony computer", 25000 , 0, 50);
 
  echo $produk1->getInfoProduk();
  echo "<br>";
  echo $produk2->getInfoProduk();

 ?>