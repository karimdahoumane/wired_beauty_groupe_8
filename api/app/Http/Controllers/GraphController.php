<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class GraphController extends Controller
{
    public function __invoke() {


        //SKC appliqué
        $moyenne1T0 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 1)
            ->where('score_skinbiosense',1)
            ->where('session_id',1)
            ->avg('mesure');
        $moyenne1T1 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 1)
            ->where('score_skinbiosense',1)
            ->where('session_id',2)
            ->avg('mesure');
        $moyenne1T2 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 1)
            ->where('score_skinbiosense',1)
            ->where('session_id',3)
            ->avg('mesure');
        $moyenne1T3 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 1)
            ->where('score_skinbiosense',1)
            ->where('session_id',4)
            ->avg('mesure');

        //SKC non appliqué
        $moyenne2T0 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 2)
            ->where('score_skinbiosense',1)
            ->where('session_id',1)
            ->avg('mesure');
        $moyenne2T1 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 2)
            ->where('score_skinbiosense',1)
            ->where('session_id',2)
            ->avg('mesure');
        $moyenne2T2 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 2)
            ->where('score_skinbiosense',1)
            ->where('session_id',3)
            ->avg('mesure');
        $moyenne2T3 = Rapport::query()
            ->where('product_code', 417432)
            ->where('zone_code', 2)
            ->where('score_skinbiosense',1)
            ->where('session_id',4)
            ->avg('mesure');


        $data1 = [$moyenne1T0, $moyenne1T1, $moyenne1T2, $moyenne1T3];
        $data2 = [$moyenne2T0, $moyenne2T1, $moyenne2T2, $moyenne2T3];


        return response()->json([
            'type' => 'line',
            'data' => [
                'labels' => ['T0', 'T1', 'T8', 'T15'],
                'datasets' => [[
                    'label' => 'Produit appliqué',
                    'data' => $data1,
                    'fill' => false,
                    'borderColor' => 'rgb(75, 192, 192)',
                    'tension' => 0.1
                ],[
                    'label' => 'Produit non appliqué',
                    'data' => $data2,
                    'fill' => false,
                    'borderColor' => 'rgb(34, 100, 192)',
                    'tension' => 0.1
                ]]
            ]
        ]);
    }
}
