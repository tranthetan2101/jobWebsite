<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'details';
    protected $primaryKey = 'id_detail';
    protected $guarded = [];

    public static function instance()
    {
        return new self;
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
}
