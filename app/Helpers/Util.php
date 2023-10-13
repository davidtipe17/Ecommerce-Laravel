<?php
namespace App\Helpers;
use App\Models\Categoria;

class Util {
    public static function MenuSuperior(){
        //Obtengo todas las categorías activas
        $lista = Categoria::where('estado','A')->get();
        return $lista;
    }
    public static function getFormaPago($valor){
        $formaPago = '';
        if($valor=='E'){
            $formaPago = "Efectivo";
        }else if($valor=='P'){
            $formaPago = "POS";
        }else{
            $formaPago = "Pago en Línea";
        }
        return $formaPago;
    }

    public static function formaEnvio($valor){
        $envios = ['D'=>'Delivery','L'=>'Recojo en Local'];
        return $envios[$valor];
    }

    public static function formatoFecha($fecha){
        $tiempo = strtotime($fecha);
        $meses = ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];
        $dia = date('d',$tiempo);
        $mes = date('m',$tiempo);
        $m = $meses[$mes-1];
        $anio = date('Y',$tiempo);
        return "$dia $m, $anio";
    }

    public static function formatoEstado($valor){
        $estados = ['P'=>'Esperando Entrega','E'=>'Pedido Entregado','N'=>'Pedido Anulado'];
        return $estados[$valor];
    }
}