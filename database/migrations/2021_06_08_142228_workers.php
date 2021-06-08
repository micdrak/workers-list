<?php

use Database\Factories\Table;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Workers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Table::WORKERS, function (Blueprint $table) {
            $table->id();
            $table->foreignId(Table::WORKERS . '_id')->constrained();
            $table->timestamps();
            $table->string('surname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('titles')->nullable();
            $table->string('email')->nullable();
            $table->string('msisdn')->nullable();
            $table->float('default_margin');
        });

        Schema::table(Table::WORKERS, function (Blueprint $table) {
            $table->index('workers_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
