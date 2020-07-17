<?php
class Book extends Database
{
    var $h = null;
    function __construct()
    {
        parent::__construct();
        $this->h = new Helper();
    }

    function db_get_list_book()
    {
        $sql = "select MASACH,TENSACH,TACGIA,NHAXUATBAN,LOAISACH from sach join loaisach on sach.MALOAI = loaisach.MALOAI";
        return $this->db_get_list($sql);
    }

    function db_get_list_name_book($id)
    {
        $sql = "select TENSACH from sach where MASACH=:MASACH";
        $params = ['MASACH' => $id];
        return $this->db_get_row($sql, $params);
    }

    function db_get_list_book_by_id($id)
    {
        $sql = "select * from sach where MASACH=:MASACH";
        $params = ['MASACH' => $id];
        return $this->db_get_row($sql, $params);
    }
    function db_get_list_book_by_id_type($id)
    {
        $sql = "select * from sach where MALOAI=:MALOAI";
        $params = ['MALOAI' => $id];
        return $this->db_get_row($sql, $params);
    }

    function db_insert_book($data)
    {
        $sql = "insert into sach(MASACH,TENSACH,TACGIA,NHAXUATBAN,MALOAI) values(:MASACH,:TENSACH,:TACGIA,:NHAXUATBAN,:MALOAI)";
        $params = [
            'MASACH' => $data['MASACH'],
            'TENSACH' => $data['TENSACH'],
            'TACGIA' => $data['TACGIA'],
            'NHAXUATBAN' => $data['NHAXUATBAN'],
            'MALOAI' => $data['MALOAI'],
        ];
        if ($this->db_execute($sql, $params))
            return true;
        else
            return false;
    }

    function db_update_book($data)
    {
        $sql = "update sach set TENSACH=:TENSACH,TACGIA=:TACGIA,NHAXUATBAN=:NHAXUATBAN,MALOAI=:MALOAI where MASACH=:MASACH";
        $params = [
            'TENSACH' => $data['TENSACH'],
            'TACGIA' => $data['TACGIA'],
            'NHAXUATBAN' => $data['NHAXUATBAN'],
            'MALOAI' => $data['MALOAI'],
            'MASACH' => $data['MASACH']
        ];
        if ($this->db_execute($sql, $params))
            return true;
        else
            return false;
    }

    function db_delete_book($data)
    {
        $sql = "delete from sach where MASACH=:MASACH";
        $params = [
            "MASACH" => $data['MASACH']
        ];
        if ($this->db_execute($sql, $params))
            return true;
        else
            return false;
    }
}
