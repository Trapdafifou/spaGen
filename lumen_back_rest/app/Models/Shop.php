<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
    protected $fillable = ['id', 'name', 'img', 'price', 'created_at', 'updated_at'];
    protected $table = 'shopping';
    protected $shopData = array();


    public function ShopDetails()
    {
        return $this->hasMany('App\Models\ShopDetails', 'stock_id', 'id');
    }

}
