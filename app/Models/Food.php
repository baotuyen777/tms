<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'foods';
    protected $primaryKey = 'id';
//    protected $dateFormat ='h:m:s';
    protected $fillable = ['name', 'count', 'description','category_id','image_path'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
