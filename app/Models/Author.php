<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['name'];
//memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['name'];

    public $timestamp = true;
    // membuat relasi one to many
    public function books()
    {
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
