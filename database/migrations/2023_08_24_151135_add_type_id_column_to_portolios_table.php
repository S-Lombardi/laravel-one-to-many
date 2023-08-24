<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portolios', function (Blueprint $table) {
            //CREO LA NUOVA COLONNA COME unsignedBigInteger --After->Dopo l'id
            $table->unsignedBinInteger('type_id')->nullable()->after('id');

            //CREO IL VINCOLO/FOREIGN KEY su tabella Types
            $table->foreign('types_id')->references('id')->on('types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portolios', function (Blueprint $table) {
            //
        });
    }
};
