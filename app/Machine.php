<?php

namespace HerramientasCela;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $table = 'machines';

    protected $fillable = [
        'name', 'description', 'photos', 'characteristics', 'specifications', 'video', 'user_guide', 'type', 'machine_type', 'sellable', 'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'photos' => 'array',
        'characteristics' => 'array',
        'specifications' => 'array'
    ];

    /**
     * Get the type of the machine
     * @param  integer $value 
     * @return string        
     */
    public function getTypeAttribute($value)
    {
        switch ($value) {
            case 1:
                return "Accesorio";
                break;
            case 2:
                return "Maquinaria";
                break;
            default:
                return "Desconocido";
                break;
        }
    }

    /**
     * Get the type of the machinarium
     * @param  integer $value 
     * @return string        
     */
    public function getMachineTypeAttribute($value){
        switch ($value) {
            case 1:
                return "Mandril";
                break;
            case 2:
                return "Trompo";
                break;
            case 3:
                return "Sujección";
                break;
            case 4:
                return "Escuadradora";
                break;
            case 5:
                return "Sierra Circular";
                break;
            case 6:
                return "Trompo";
                break;
            case 7:
                return "Lijadora de Banda";
                break;
            case 8:
                return "Torno";
                break;
            case 9:
                return "Escoplo";
                break;
            case 10:
                return "Sierra Cinta";
                break;
            default:
                return 'Desconocido';
                break;
        }
    }

    public function getVideoAttribute($video)
    {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "https://www.youtube.com/embed/$2",
            $video
        );
    }
}
