<?php
class Partido{
     
     private $nombre;
     private $src_img;
     private $DUI;
     private $represent;
     private $adminId;
     
     public function getNombre(){
         return $this->nombre;
     }
     public function setNombre($nombre){
         $this->nombre =$nombre;
     }
      /* encapsulamiento de datos de noticia*/
      public function getSrcImg(){
          return $this->src_img;
          
      }
      public function setSrcImg($src_img){
          $this->src_img = $src_img;
      }
      
   public function getDui(){
       return $this->dui;
   }
   
   public function setDui($DUI){
       $this->dui = $DUI;
   }
   public function getRepresent(){
       return $this->represent;
   }
   
   public function setRepresent($represent){
       $this->represent = $represent;
   }
   public function getAdminid(){
       return $this->adminid;
   }
   
   public function setAdminid($adminId){
       $this->adminid = $adminId;
   }
    
}
?>