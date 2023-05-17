<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_done',
        'title',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];

    protected function user (){
        return $this->belongsTo(User::class);
    }

    protected function category(){
        return $this->belongsTo(Category::class);
    }

}
