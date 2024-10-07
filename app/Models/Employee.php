<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'hiring_date',
        'work_id',
        'notes',
    
];
public function work(){
    return $this->belongsTo(Work::class);
}
public function documents(){
    return $this->hasMany(Document::class);
}
}
