<?php 
namespace model;

class ProductModel {
  public int $id;
  public string $name;
  public int $delete_flg;

  function echoProduct() {
    echo $this->name, 'です';
  }
}