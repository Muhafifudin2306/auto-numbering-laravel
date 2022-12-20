<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = [
        'number',
        'customer',
        'total',
        'series_id'
        
    ];

    public function prefix()
    {
        return $this->belongsTo(Prefix::class, 'series_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($invoice){
            $invoice->number = Invoice::where('series_id', $invoice->series_id)->max('number')+1;
        });
    }
}
