<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable=[
         'issue_date',
         'expire_date',
         'notes',
         'document_type',
         'employee_id',
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
