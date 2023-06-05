<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'state_id',
        'name',
        'status',
    ];
    public function status()
    {
        return $this->status == true ? '<span class="badge bg-success">مفعل</span>' : '<span class="badge bg-danger">غير مفعل</span>';
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
}
