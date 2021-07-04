<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryblog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categoryblogs';
    protected $primarykey = 'id';
    protected $guarded = [];
    public function Blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
