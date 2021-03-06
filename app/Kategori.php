<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
	use SoftDeletes;

	protected $dates=['deleted_at'];
    protected $table='kategori';

    protected $guarded=[''];
}
