<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Solicitud extends Model
{
    use SoftDeletes;

    protected $table = "solicitudes";

    protected $fillable = ['nombre_solicitante', 'tipo_limite', 'estado', 'informe_tecnico_legal', 'nota_admision', 'nota_subsanacion', 'user_id'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // Relationships
    public function municipios(){
        return $this->belongsToMany('App\Municipio', 'solicitud_municipio', 'solicitud_id', 'municipio_codigo');
    }
    public function documentosSolicitud(){
        return $this->belongsToMany('App\DocumentoDigital', 'documento_digital_solicitud', 'solicitud_id', 'documento_digital_id')->withPivot('cumple', 'fojas_de', 'fojas_a', 'archivo', 'fecha', 'observaciones');
    }
    public function documentosAdicional(){
        return $this->belongsToMany('App\DocumentoDigital', 'documento_digital_adicional', 'solicitud_id', 'documento_digital_id')->withPivot('cumple', 'archivo', 'fecha', 'observaciones');
    }
    public function documentosSubsanacion(){
        return $this->belongsToMany('App\DocumentoDigital', 'documento_digital_subsanacion', 'solicitud_id', 'documento_digital_id')->withPivot('cumple', 'archivo', 'fecha', 'observaciones');
    }
    public function etapa_inicio(){
        return $this->hasOne('App\EtapaInicio');
    }
}
