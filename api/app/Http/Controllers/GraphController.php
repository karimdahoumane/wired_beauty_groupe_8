<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class GraphController extends Controller
{
    public function __invoke() {


        $products = Rapport::query()->select('product_code')->distinct()->get()->toArray();
        $zones = Rapport::query()->select('zone_code')->distinct()->get()->toArray();
        $scores = Rapport::query()->select('score_skinbiosense')->distinct()->get()->toArray();
        $sessions = Rapport::query()->select('session_id')->distinct()->get()->toArray();
        $data = array();

        foreach ($products as $product) {
            foreach ($scores as $score) {
                foreach ($zones as $zone) {
                    foreach ($sessions as $session) {
                        array_push($data, Rapport::query()
                            ->where('product_code', $product)
                            ->where('zone_code', $zone)
                            ->where('score_skinbiosense',$score)
                            ->where('session_id',$session)
                            ->avg('mesure'));
                    }
                }
            }
        }

        return response()->json(
            [
                [
                'type' => 'line',
                'data' => [
                    'labels' => ['T0', 'T1', 'T8', 'T15'],
                    'datasets' => [[
                        'label' => 'Produit appliqué',
                        'data' => [$data[0], $data[1], $data[2], $data[3]],
                        'fill' => false,
                        'borderColor' => 'rgb(75, 192, 192)',
                        'tension' => 0.1
                    ],[
                        'label' => 'Produit non appliqué',
                        'data' => [$data[4], $data[5], $data[6], $data[7]],
                        'fill' => false,
                        'borderColor' => 'rgb(34, 100, 192)',
                        'tension' => 0.1
                    ]]
                ]],
                [
                    'type' => 'line',
                    'data' => [
                        'labels' => ['T0', 'T2', 'T8', 'T15'],
                        'datasets' => [[
                            'label' => 'Produit appliqué',
                            'data' => [$data[8], $data[9], $data[10], $data[11]],
                            'fill' => false,
                            'borderColor' => 'rgb(75, 192, 192)',
                            'tension' => 0.1
                        ],[
                            'label' => 'Produit non appliqué',
                            'data' => [$data[12], $data[13], $data[14], $data[15]],
                            'fill' => false,
                            'borderColor' => 'rgb(34, 100, 192)',
                            'tension' => 0.1
                        ]]
                    ]
                ],
                [
                    'type' => 'line',
                    'data' => [
                        'labels' => ['T0', 'T2', 'T8', 'T15'],
                        'datasets' => [[
                            'label' => 'Produit appliqué',
                            'data' => [$data[16], $data[17], $data[18], $data[19]],
                            'fill' => false,
                            'borderColor' => 'rgb(75, 192, 192)',
                            'tension' => 0.1
                        ],[
                            'label' => 'Produit non appliqué',
                            'data' => [$data[20], $data[21], $data[22], $data[23]],
                            'fill' => false,
                            'borderColor' => 'rgb(34, 100, 192)',
                            'tension' => 0.1
                        ]]
                    ]
                ],
                [
                    'type' => 'line',
                    'data' => [
                        'labels' => ['T0', 'T2', 'T8', 'T15'],
                        'datasets' => [[
                            'label' => 'Produit appliqué',
                            'data' => [$data[24], $data[25], $data[26], $data[27]],
                            'fill' => false,
                            'borderColor' => 'rgb(75, 192, 192)',
                            'tension' => 0.1
                        ],[
                            'label' => 'Produit non appliqué',
                            'data' => [$data[28], $data[29], $data[30], $data[31]],
                            'fill' => false,
                            'borderColor' => 'rgb(34, 100, 192)',
                            'tension' => 0.1
                        ]]
                    ]
                ],
                [
                    'type' => 'line',
                    'data' => [
                        'labels' => ['T0', 'T2', 'T8', 'T15'],
                        'datasets' => [[
                            'label' => 'Produit appliqué',
                            'data' => [$data[32], $data[33], $data[34], $data[35]],
                            'fill' => false,
                            'borderColor' => 'rgb(75, 192, 192)',
                            'tension' => 0.1
                        ],[
                            'label' => 'Produit non appliqué',
                            'data' => [$data[36], $data[37], $data[38], $data[39]],
                            'fill' => false,
                            'borderColor' => 'rgb(34, 100, 192)',
                            'tension' => 0.1
                        ]]
                    ]
                ],
                [
                    'type' => 'line',
                    'data' => [
                        'labels' => ['T0', 'T2', 'T8', 'T15'],
                        'datasets' => [[
                            'label' => 'Produit appliqué',
                            'data' => [$data[40], $data[41], $data[42], $data[43]],
                            'fill' => false,
                            'borderColor' => 'rgb(75, 192, 192)',
                            'tension' => 0.1
                        ],[
                            'label' => 'Produit non appliqué',
                            'data' => [$data[44], $data[45], $data[46], $data[47]],
                            'fill' => false,
                            'borderColor' => 'rgb(34, 100, 192)',
                            'tension' => 0.1
                        ]]
                    ]
                ]
        ]);
    }
}
