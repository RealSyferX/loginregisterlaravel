<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Specify the table name since it doesn't follow Laravel's naming convention
    protected $table = 'product_list';

    // Specify which fields can be mass-assigned
    protected $fillable = ['product_name', 'price', 'quantity', 'product_img'];

    // Disable timestamps if your table doesn't have `created_at` and `updated_at` columns
    public $timestamps = false;
}
