<?php

namespace HerramientasCela;

use Illuminate\Database\Eloquent\Model;

class Replacement extends Model
{
    protected $fillable = ['nombre', 'type', 'description', 'image', 'sellable', 'price'];

    public function getPriceAttribute($value)
    {
        return money_format('%.2n', $value/100);
    }

    public function scopeMandril($query)
    {
        return $query->whereIn('type', [1, 2]);
    }

    public function scopeTrompoBotella($query)
    {
        return $query->whereIn('type', [3]);
    }

    public function scopeSierraCinta($query)
    {
        return $query->whereIn('type', [4, 5, 6]);
    }

    public function scopeTorno($query)
    {
        return $query->whereIn('type', [7, 8, 9, 10, 11, 12, 13, 14, 15]);
    }

    public function scopeEscoplo($query)
    {
        return $query->whereIn('type', [16]);
    }

    public function scopeLijadora($query)
    {
        return $query->whereIn('type', [17, 18, 19]);
    }

    public function scopeTrompo($query)
    {
        return $query->whereIn('type', [20, 21, 22, 23, 24, 25, 26, 27, 28]);
    }

    public function scopeSierraCircularEscuadradora($query)
    {
        return $query->whereIn('type', [29, 30, 31, 32, 33, 34, 35, 36]);
    }

    public function scopeMotor($query)
    {
        return $query->whereIn('type', [37, 38]);
    }
}
