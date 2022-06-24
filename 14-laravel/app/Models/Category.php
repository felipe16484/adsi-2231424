<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description'
    ];

    public function games(){
        return $this->hasMany('App\Models\Game');
    } 

    // Scopes
    public function scopeNames($categories, $q) {
        if(trim($q)) {
            $categories->where('name', 'LIKE', "%$q%");
        }
    }
}
