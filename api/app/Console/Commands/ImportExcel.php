<?php

namespace App\Console\Commands;

use App\Models\Rapport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BaseImport;

class ImportExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import an excel file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
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

        dump('Valeurs delta de l\'efficacité du produit SKC (appliqué et non appliqué) sur 4 temps');
        dump('T0 : '.$moyenne2T0 - $moyenne1T0);
        dump('T1 : '.$moyenne2T1 - $moyenne1T1);
        dump('T8 : '.$moyenne2T2 - $moyenne1T2);
        dump('T15 : '.$moyenne2T3 - $moyenne1T3);
        //Excel::import(new BaseImport, 'DatasHackaton_2022_08_03.xlsx');

        return 0;
    }
}
