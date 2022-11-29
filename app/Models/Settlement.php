<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $zip_code
 * @property integer $key
 * @property string $name
 * @property string $zone_type
 * @property string $settlement_type_name
 * @property Zipcode $zipcode
 */
class Settlement extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['zip_code', 'key', 'name', 'zone_type', 'settlement_type_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zipcode()
    {
        return $this->belongsTo('App\Models\Zipcode', 'zip_code', 'zip_code');
    }
}
