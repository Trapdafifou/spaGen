<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pages extends Model {
    protected $fillable = ['id', 'identifier_name', 'logo', 'title', 'landing', 'bloc_tab', 'block_contact'];
    protected $table = 'pages';

}
