<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    //
    protected $table = "loaitin";

    public function TinTuc()
    {
    	return $this->hasMany('App\TinTuc','idLoaiTin','id');
    }

    // public function Delete(){
    //     $this->TinTuc()->delete(); // Vì có ràng buộc khóa ngoại nên phải xóa dữ liệu có khóa ngoại trước

    //     $this->LoaiTin()->delete();

    //     return parent::delete();
    // }
}
