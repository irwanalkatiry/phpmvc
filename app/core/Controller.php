<?php
//beda ini dengan folde4 controllers
//file yg ada di controllers akan extend dengan controller ini
//controller ini yg akan mwngatur controller yg semua dibuat
class Controller {
  public function view($view, $data=[]) {
  
  require_once '../app/views/' .$view. '.php';
  }
}