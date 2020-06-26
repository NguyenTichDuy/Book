<?php 
class Users extends Database
{
   var $h = null;
   var $r = null;
   
   function __construct()
   {
     parent::__construct();
     $this->h = new Helper();
     $this->r = new Role();
   }

   function db_get_user_by_id($id)
   {
      $sql = "select * from tblusers where userid=:userid";
      $params = ['userid'=>$id];
      return $this->db_get_row($sql, $params);
   } 

   function db_get_user_by_username($username)
   {
      $sql = "select * from tblusers where username=:username";
      $params = ['username'=>$username];
      return $this->db_get_row($sql, $params);
   }  

   function db_get_user_by_email($email)
   {
      $sql = "select * from tblusers where email=:email";
      $params = ['email'=>$email];
      return $this->db_get_row($sql, $params);
   } 

   function db_insert_user($data)
   {
      $sql ="insert into tblusers(username,password,email,fullname,typeuser,is_active) values(:username,:password,:email,:fullname,:typeuser,:is_active)";
      $params = [
         'username'=>$data['username'],
         'password'=>md5($data['password']),
         'email'=>$data['email'],
         'fullname'=>$data['fullname'],
         'typeuser'=>$data['typeuser'],
         'is_active'=>$data['is_active']
      ];
      if($this->db_execute($sql,$params))
      	return true;
      else
        return false;
   }

   function db_update_user($data)
   {
      $sql ="update tblusers set username=:username,password=:password,email=:email,fullname=:fullname,typeuser=:typeuser,is_active=:is_active where userid=:userid";
      $params = [
         'userid'=>$data['userid'],
         'username'=>$data['username'],
         'password'=>md5($data['password']),
         'email'=>$data['email'],
         'fullname'=>$data['fullname'],
         'typeuser'=>$data['typeuser'],
         'is_active'=>$data['is_active']
      ];
      if($this->db_execute($sql,$params))
      	return true;
      else
        return false;
   }

   function db_delete_user($id)
   {
      $sql ="delete from tblusers where userid=:userid";
      $params = [
          'userid'=>$id
      ];
      if($this->db_execute($sql,$params))
      	return true;
      else
        return false;
   }

   function db_get_list_user()
   {
   	  $sql = "select * from tkadmin";
   	  return $this->db_get_list($sql);
   }
   function db_get_list_user_nd()
   {
   	  $sql = "select * from tknguoidung";
   	  return $this->db_get_list($sql);
   }
}
?>