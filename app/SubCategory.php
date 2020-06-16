<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function subcategory_first_children(){
        return $this->hasMany(SubCategory_First_Child::class);
    }
}
