<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'status',
    ];

    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }


    public function status()
    {

//        if ($this->status == 1){
//            return 'مفعل';
//        }else{
//            return 'غير مفعل';
//        }

        return $this->status == true ? '<span class="badge bg-success">مفعل</span>' : '<span class="badge bg-danger">غير مفعل</span>';

//        switch ($this->status) {
//            case 0 :
//                $result = 'غير مفعل';
//                break;
//
//            case 1 :
//                $result = 'مفعل';
//                break;
//            default :
//                $result = 'غير' ;
//
//        }
//
//        return $result;
    }

}
