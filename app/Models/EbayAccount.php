<?php

namespace Someline\Models;

use Someline\Models\BaseModel;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class EbayAccount extends BaseModel implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'id';

    protected $fillable = [];

    // Fields to be converted to Carbon object automatically
    protected $dates = [];

}
