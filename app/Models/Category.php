<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name','description','image'];

    function menus(){
        return $this->BelongsToMany(Menu::class,'category_menu');
    }
}
