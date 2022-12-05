<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagePath', 
        'storeName', 
        'category', 
        'desc',
        'address', 
        'noWa', 
        'ig',
        'shopee',
        'others',
        'vendorId', 
        'created_at', 
        'updated_at'
    ];

    public function user()
    {
       return $this->belongsTo(Admins::class);
    }
}
