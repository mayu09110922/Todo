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

    public $sortableAs = ['id','title','created_at','updated_at', 'limit'];


public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->paginate($limit_count);
}
}