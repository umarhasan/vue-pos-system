<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'date', 'Ref', 'client_id', 'GrandTotal', 'warehouse_id', 'user_id', 'statut',
        'zone_1','zone_2','zone_3','zone_4','zone_5','zone_6','zone_7','zone_8','zone_9',
        'zone_10','zone_11','zone_12','zone_13','zone_14','zone_15','zone_16','is_custom',
        'notes', 'discount', 'shipping', 'TaxNet', 'tax_rate', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected $casts = [
        'GrandTotal' => 'double',
        'user_id' => 'integer',
        'client_id' => 'integer',
        'warehouse_id' => 'integer',
        'is_custom' => 'integer',
        'discount' => 'double',
        'shipping' => 'double',
        'TaxNet' => 'double',
        'tax_rate' => 'double',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function details()
    {
        return $this->hasMany('App\Models\QuotationDetail');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function warehouse()
    {
        return $this->belongsTo('App\Models\Warehouse');
    }

}
