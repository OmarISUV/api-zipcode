<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $zip_code
 * @property string $locality
 * @property integer $federal_entity_key
 * @property string $federal_entity_name
 * @property string $federal_entity_code
 * @property integer $municipality_key
 * @property string $municipality_name
 * @property Settlement[] $settlements
 */
class Zipcode extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'zip_code';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['locality', 'federal_entity_key', 'federal_entity_name', 'federal_entity_code', 'municipality_key', 'municipality_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settlements()
    {
        return $this->hasMany('App\Models\Settlement', 'zip_code', 'zip_code');
    }
}
