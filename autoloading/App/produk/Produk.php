<?php 

abstract class produk {
  // property
  // visibility  private 
  protected $judul ,
           $penulis ,
           $penerbit,
           $harga,
           $diskon = 0 ;

  // constructor
  public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
          // memanggil property
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
    
         }

  public function setJudul($judul){
    $this->judul = $judul;

  }

  public function getJudul(){
    return $this->judul;
  }

  public function setPenulis($penulis){
    $this->penulis = $penulis;
  }

  public function getPenulis(){
    return $this->penulis;
  }

  public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
  }

  public function getPenerbit(){
    return $this->penerbit;
  }

  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }

  public function getDiskon(){
    return $this->diskon;
  }
  
  public function setHarga($harga){
    $this->harga =$harga;
  } 


  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  // method
  public function getlabel(){
    return "$this->penulis, $this->penerbit";

         }

  abstract public function getInfo();

}


