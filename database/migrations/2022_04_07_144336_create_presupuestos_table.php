<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUnidad');
            $table->bigInteger('idLicitacion');
            $table->bigInteger('idTipoServicio');
            $table->bigInteger('idProveedor');
            $table->string('iditemPresupuestario1')->nullable();
            $table->string('iditemPresupuestario2')->nullable();
            $table->string('iditemPresupuestario3')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaTermino')->nullable();
            $table->string('ValEne')->nullable();
            $table->string('ValFeb')->nullable();
            $table->string('ValMar')->nullable();
            $table->string('ValAbr')->nullable();
            $table->string('ValMay')->nullable();
            $table->string('ValJun')->nullable();
            $table->string('ValJul')->nullable();
            $table->string('ValAgo')->nullable();
            $table->string('ValSep')->nullable();
            $table->string('ValOct')->nullable();
            $table->string('ValNov')->nullable();
            $table->string('ValDic')->nullable();
            $table->bigInteger('id_anio');
            $table->bigInteger('ValPreventivo');
            $table->bigInteger('ValCorrectivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}
