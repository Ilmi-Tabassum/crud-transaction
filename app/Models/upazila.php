<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upazila extends Model
{
    /**
     * @var string
     */
    protected $table = 'upazila';
    /**
     * @var array
     */
    protected $fillable = ['thana_id','upazila_name'];
}
