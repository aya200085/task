<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory , SoftDeletes;
    protected  $fillable = [
        'country_id',
        'name',
        'status',
    ];

    public function status()
    {
        return $this->status == true ? '<span class="badge bg-success">مفعل</span>' : '<span class="badge bg-danger">غير مفعل</span>';
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function citys()
    {
        return $this->hasMany(City::class,'state_id');
    }
}
