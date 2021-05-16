<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Todo extends Model
{
    use Sortable;
    
    protected $fillable = [
    'title',
    'body',
    'limit'
];

    public $sortable = ['id','title','created_at','updated_at', 'limit'];
}