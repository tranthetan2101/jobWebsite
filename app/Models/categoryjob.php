<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryjob extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categoryjobs';
    protected $guarded = [];
    public function Posts()
    {
        return $this->hasMany(Posts::class);
    }
}
