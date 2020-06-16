<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory_First_Child extends Model
{
    public function subcategory_second_children(){
        return $this->hasMany(SubCategory_Second_Child::class);
    }
}
