<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thana extends Model
{
    /**
     * @var string
     */
    protected $table = 'thana';
    /**
     * @var array
     */
    protected $fillable = ['country_id','title'];
}
