<?php 
namespace model;

class UserModel extends AbctractModel {
  public string $id;
  public string $pwd;
  public string $nickname;
  public int $del_flg;

  protected static $SESSION_NAME = '_user';
}