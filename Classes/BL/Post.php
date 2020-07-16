<?php  
class Post extends Database
{
   var $h = null;
   
   function __construct()
   {
     parent::__construct();
     $this->h = new Helper();
   }
   function db_get_list_post()
    {
        $sql = "select MABAIVIET, ANH, TIEUDE, NOIDUNG, NGAYDANG, NGAYSUA, TENSACH from baiviet join sach on baiviet.MASACH = sach.MASACH";
        return $this->db_get_list($sql);
    }
   function db_get_post_by_id($id)
   {
      $sql = "select * from baiviet where MABAIVIET=:MABAIVIET";
      $params = ['MABAIVIET'=>$id];
      return $this->db_get_row($sql, $params);
   } 

   function db_insert_post($data)
   {
      $sql ="insert into baiviet(MABAIVIET,ANH,TIEUDE,NOIDUNG,NGAYDANG,NGAYSUA,MASACH) values(:MABAIVIET,:ANH,:TIEUDE,:NOIDUNG,:NGAYDANG,:NGAYSUA,:MASACH)";
      $params = [
         'MABAIVIET'=>$data['MABAIVIET'],
         'ANH'=>$data['ANH'],
         'TIEUDE'=>$data['TIEUDE'],
         'NOIDUNG'=>$data['NOIDUNG'],
         'NGAYDANG'=>$data['NGAYDANG'],
         'NGAYSUA'=>$data['NGAYSUA'],
         'MASACH'=>$data['MASACH']
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
        return false;
   }

   function db_update_post($data)
   {
      $sql ="update baiviet set ANH=:ANH,TIEUDE=:TIEUDE,NOIDUNG=:NOIDUNG,NGAYDANG=:NOIDUNG,NGAYSUA=:NGAYSUA,MASACH=:MASACH where MABAIVIET=:MABAIVIET";
      $params = [
         'MABAIVIET'=>$data['MABAIVIET'],
         'ANH'=>$data['ANH'],
         'TIEUDE'=>$data['TIEUDE'],
         'NOIDUNG'=>$data['NOIDUNG'],
         'NGAYDANG'=>$data['NGAYDANG'],
         'NGAYSUA'=>$data['NGAYSUA'],
         'MASACH'=>$data['MASACH']
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
         return false;
   }

   function db_delete_post($id)
   {
      $sql ="delete from baiviet where MABAIVIET=:MABAIVIET";
      $params = ['MABAIVIET'=>$id];
      if($this->db_execute($sql,$params))
         return true;
      else
         return false;
   }
}
?>