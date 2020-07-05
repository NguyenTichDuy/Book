<?php
class TypeBook extends Database
{
    var $h = null;
    function __construct()
    {
        parent::__construct();
        $this->h = new Helper();
    }

    function db_get_list_type_book()
    {
        $sql = "select * from loaisach";
        return $this->db_get_list($sql);
    }

    function db_get_list_type_name_book($id)
    {
        $sql = "select LOAISACH from loaisach where MALOAI=:MALOAI ";
        $params = ['MALOAI' => $id];
        return $this->db_get_row($sql, $params);
    }

    function db_get_list_type_by_id($id)
    {
        $sql = "select * from loaisach where MALOAI=:MALOAI";
        $params = ['MALOAI' => $id];
        return $this->db_get_row($sql, $params);
    }

    function db_insert_type($data)
    {
        $sql = "insert into loaisach(MALOAI,LOAISACH) values(:MALOAI,:LOAISACH)";
        $params = [
            "MALOAI" => $data['MALOAI'],
            "LOAISACH" => $data['LOAISACH']
        ];
        if ($this->db_execute($sql, $params))
            return true;
        else
            return false;
    }

    function db_update_type($data)
    {
        $sql = "update loaisach set MALOAI=:MALOAI,LOAISACH=:LOAISACH where MALOAI=:MALOAI";
        $params = [
            "MALOAI" => $data['MALOAI'],
            "LOAISACH" => $data['LOAISACH'] 
        ];
        if ($this->db_execute($sql, $params))
            return true;
        else
            return false;
    }

    function db_delete_type($data)
    {
        $sql = "delete from loaisach where MALOAI=:MALOAI";
        $params = [
            "MALOAI" => $data['MALOAI']
        ];
        if ($this->db_execute($sql, $params))
            return true;
        else
            return false;
    }
}
