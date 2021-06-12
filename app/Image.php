<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    /**
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * @var string[]
     */
    protected $appends = ['absolute_path'];

    /**
     * append method for absolute path
     *
     * @return mixed
     */
    public function getAbsolutePathAttribute()
    {
        return Storage::url('file.jpg');
    }

    /**
     * encrypted id attribute
     *
     * @param $value
     * @return string
     */
    public function getIdAttribute($value)
    {
        return encryptId($value);
    }
}
