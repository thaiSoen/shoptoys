<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public $table='_cart_product';
    protected $primarykey ='id';
    public function order(){
        return $this->belongsTo('App\Models\Order','order_id');
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
    protected $fillable= [
        'quantity','price','product_id','cart_id'
    ]   ;
}
