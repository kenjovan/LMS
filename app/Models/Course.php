<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'author',
        'description',
        'cover_path',
        'material_path',
    ];

    public function transactionDetail() {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'transaction_id');
    }

    public function category() {
        return $this->belongsToMany(Category::class, 'course_category_detail','course_id','category_id');
    }
}
