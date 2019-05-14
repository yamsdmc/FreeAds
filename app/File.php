<?php
/**
 * Created by PhpStorm.
 * User: yamsubunto
 * Date: 27/03/19
 * Time: 12:30
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'id', 'name', 'size', 'id_ad'
    ];

    protected $table = 'file_pictures';

//    return $this->belongsTo('App\Annonce', 'user_id', 'id');
}
