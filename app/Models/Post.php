<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'body',
    ];
    
    public function getByLimit(int $limit_count = 2)
    {
        return $this->orderby('updated_at', 'ASC')->limit($limit_count)->get();
    }
     public function getPaginateByLimit(int $limit_count = 1)
    {
        return $this->orderby('updated_at', 'ASC')->paginate($limit_count);
    }
}

