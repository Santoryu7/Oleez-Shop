<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use Filterable;
    use SoftDeletes;

    protected $table = 'products';
    protected $guarded = false;

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
}
