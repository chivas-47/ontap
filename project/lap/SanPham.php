<?php

// Lớp cơ bản SanPham
class SanPham
{
    private $id;
    private $ten;
    private $gia;

    public function __construct($id, $ten, $gia)
    {
        $this->id = $id;
        $this->ten = $ten;
        $this->gia = $gia;
    }

    public function hienThi()
    {
        echo "ID: $this->id - Tên: $this->ten - Giá: $this->gia<br>";
    }
    function getId()
    {
        return $this->id;
    }
    function setTen($value)
    {
        return $this->ten = $value;
    }

    function getTen()
    {
        return $this->ten;
    }
    function getGia()
    {
        return $this->gia;
    }
    function  setGia($gia)
    {
        return  $this->gia = $gia;
    }
}




