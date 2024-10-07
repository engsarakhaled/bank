<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
           'work_name',
    ];
    public function employees(){
        return $this->hasMany(Emplopee::class);
    }
}
