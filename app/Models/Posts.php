<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CV;

class Posts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $guarded = [];
    // protected $fillable = [
    //     'post_name',
    //     'post_description',
    //     'id_category',
    // ];

    public static function instance()
    {
        return new self;
    }

    public function detailPost()
    {
        return $this->hasOne(Detail::class, 'id_post', 'id');
    }

    public function insert($params, $getId = false)
    {
        $post = new self();
        foreach ($params as $column => $data) {
            $post->{$column} = $data;
        }
        try {
            $post->save();
            return $getId ? $post->id : true;
        } catch (Exception $exception) {
            return false;
        }
    }

    public function cv_post()
    {
        return $this->hasMany(CV::class);
    }
}
