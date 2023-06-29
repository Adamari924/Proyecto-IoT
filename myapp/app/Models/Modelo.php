<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo extends Model{
    protected $table      = 'Monitoreo';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['Temperatura','Humedad','CalidadAire'];

    public function getGoogleGauge(){
        return $this->select('Temperatura,Humedad,CalidadAire')->orderBy('id', 'desc')->first();
    }
    public function getGoogleLine(){
        $aux = $this->select('id,Temperatura,Humedad,CalidadAire')->orderBy('id', 'asc')->findAll();
        if (empty($aux)) 
            return [];

        foreach ($aux as $value)
            $arr[] = [intval($value['id']),intval($value['Temperatura']),intval($value['Humedad']),intval($value['CalidadAire'])];

        return $arr;
    }

    public function getEcharBar(){
        $aux= $this->select('Temperatura,Humedad,CalidadAire')->orderBy('id', 'desc')->first();
        return [
            'categories'=>['Temperatura','Humedad','CalidadAire'],
            'data'=>[intval($aux['Temperatura']),intval($aux['Humedad']),intval($aux['CalidadAire'])]
        ];
    }
    public function getEcharLine(){
        $aux= $this->select('id,Temperatura,Humedad,CalidadAire')->orderBy('id', 'asc')->findAll();

        if (empty($aux)) 
            return [];

        foreach ($aux as $value) {
           $col[]=intval($value['id']);
           $tem[]=intval($value['Temperatura']);
           $hum[]=intval($value['Humedad']);
           $cal[]=intval($value['CalidadAire']);
        }
        return [
            'columnas'=>$col,
            'Temperatura'=>$tem,
            'Humedad'=>$hum,
            'CalidadAire'=>$cal,
        ];

    }
}

