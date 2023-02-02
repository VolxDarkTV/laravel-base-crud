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
        Schema::create('holies', function (Blueprint $table) {
            $table -> id();
            $table -> string('name');
            $table -> string('surname');
            $table -> date('blessing_date') -> nullable(true);
            $table -> integer('num_miracles') -> unsigned;

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holys');
    }
};
