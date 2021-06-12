<?php

namespace App;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasImages;

    /**
     * @var string[]
     */
    protected $guarded = ['id'];
}
