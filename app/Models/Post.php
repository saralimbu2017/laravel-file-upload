<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $directory = "/images/";
    protected $fillable = [
        'title',
        'content',
        'path'
    ]; 

    public function getPathAttribute($value){
        return $this->directory.$value;
    }
}
