<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thib
 * Date: 12/11/2017
 * Time: 18:40
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ShopDetails extends Model {
    protected $fillable = ['id', 'stock_id'];
    protected $table = 'shopping_stock';


    public function ShopDetails()
    {
        return $this->hasOne('App\Models\UserViews', 'id', 'stock_id');
    }

}