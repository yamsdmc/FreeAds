<?php
/**
 * Created by PhpStorm.
 * User: yamsubunto
 * Date: 26/03/19
 * Time: 12:43
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'id', 'title', 'description', 'price', 'id_user'
    ];
    protected $table = 'ad';
}
