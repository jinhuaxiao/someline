<?php

namespace Someline\Models;

use Someline\Models\BaseModel;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Textnow extends BaseModel implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'id';

    // protected $fillable = [];
    protected $guarded  = [];

    // Fields to be converted to Carbon object automatically
    protected $dates = [];

    // protected $table = "textnow";

}
