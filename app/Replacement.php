<?php

namespace HerramientasCela;

use Illuminate\Database\Eloquent\Model;

class Replacement extends Model
{
    protected $fillable = ['type', 'description', 'image', 'sellable', 'price'];
}
