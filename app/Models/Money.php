<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Money extends Model
{
     use Sortable;
     
    protected $table = 'moneys';
    protected $fillable = [
    'title',
    'body',
    'limit'
];
     public $sortable = ['id','title','created_at','updated_at', 'limit'];
}
