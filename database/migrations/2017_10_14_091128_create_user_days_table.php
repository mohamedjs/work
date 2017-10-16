<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_day', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned() ;
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade') ;
            $table->integer('month_id')->unsigned() ;
            $table->foreign('month_id')
                  ->references('id')
                  ->on('months')
                  ->onDelete('cascade') ;
            $table->integer('day_id')->unsigned() ;
            $table->foreign('day_id')
                  ->references('id')
                  ->on('days')
                  ->onDelete('cascade') ;
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
        Schema::dropIfExists('user_days');
    }
}
