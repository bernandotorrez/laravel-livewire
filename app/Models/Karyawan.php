<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Tell to model that our primary key is employee_number
    protected $primaryKey = 'employee_number';

    // Tell to model that our primary key type is a string not an int
    protected $keyType = 'string';

    // Tell to model that our primary key is not auto incrementing
    public $incrementing = false;

    // Tell to model that our karyawan table name is tbl_karyawan
    protected $table = 'tbl_karyawan';

    // Tell to model that fillable field in tbl_karyawan is only
    // 'employee_number', 'employee_name', 'gender'
    protected $fillable = ['employee_number', 'employee_name', 'gender'];
}
