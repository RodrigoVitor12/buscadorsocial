<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'from',
        'to',
        'data',
        'price',
        'contact',
        'description',
        'link',
        'score',
        'nivel',
        'fonte',
        'qualidade',
        'status',
    ];

    /*
    |--------------------------------------------------------------------------
    | 🔥 AUTO SCORE (DIFERENCIAL)
    |--------------------------------------------------------------------------
    | Sempre que salvar ou atualizar, recalcula score automaticamente
    */
    protected static function booted()
    {
        static::saving(function ($lead) {

            $score = 0;

            if (!empty($lead->contato)) $score += 5;
            if (!empty($lead->data)) $score += 3;
            if (!empty($lead->origem)) $score += 2;
            if (!empty($lead->destino)) $score += 2;
            if (!empty($lead->preco)) $score += 1;

            $lead->score = $score;

            // 🎯 Define nível
            if ($score >= 8) {
                $lead->nivel = 'quente';
            } elseif ($score >= 5) {
                $lead->nivel = 'morno';
            } else {
                $lead->nivel = 'frio';
            }
        });
    }
}