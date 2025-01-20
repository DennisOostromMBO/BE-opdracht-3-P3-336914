<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateJaminATables extends Migration
{
    public function up()
    {
        DB::statement('
            -- Voeg hier de volledige SQL-code toe, inclusief het creëren van de database en tabellen
        ');
    }

    public function down()
    {
        DB::statement('
            -- Voeg hier de SQL-code toe om de database en tabellen te verwijderen als je de migration terugdraait
        ');
    }
}
