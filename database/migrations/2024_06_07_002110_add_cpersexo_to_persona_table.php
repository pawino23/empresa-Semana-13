<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCpersexoToPersonaTable extends Migration
{
    public function up()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->char('cPerSexo', 15)->default('Masculino')->after('nPerEdad');
        });
    }

    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropColumn('cPerSexo');
        });
    }
}