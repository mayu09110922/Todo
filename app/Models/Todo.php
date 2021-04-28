<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
    'body',
];
 public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
