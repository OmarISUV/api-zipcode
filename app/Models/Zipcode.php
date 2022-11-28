<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $d_codigo
 * @property string $d_asenta
 * @property string $d_tipo_asenta
 * @property string $D_mnpio
 * @property string $d_estado
 * @property string $d_ciudad
 * @property string $d_CP
 * @property string $c_estado
 * @property string $c_oficina
 * @property string $c_CP
 * @property string $c_tipo_asenta
 * @property string $c_mnpio
 * @property string $id_asenta_cpcons
 * @property string $d_zona
 * @property string $c_cve_ciudad
 */
class Zipcode extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['d_codigo', 'd_asenta', 'd_tipo_asenta', 'D_mnpio', 'd_estado', 'd_ciudad', 'd_CP', 'c_estado', 'c_oficina', 'c_CP', 'c_tipo_asenta', 'c_mnpio', 'id_asenta_cpcons', 'd_zona', 'c_cve_ciudad'];
}
