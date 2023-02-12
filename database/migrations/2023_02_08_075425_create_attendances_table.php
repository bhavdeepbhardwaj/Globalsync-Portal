<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->text('emp_id');
            $table->text('att_month')->nullable();
            $table->text('data')->nullable();
            $table->text('totalDay')->nullable();
            $table->text('presentDay')->nullable();
            $table->text('wfoP')->nullable();
            $table->text('wfhP')->nullable();
            $table->text('late')->nullable();
            $table->text('ab')->nullable();
            $table->text('wfoHD')->nullable();
            $table->text('wfhHD')->nullable();
            $table->text('upl')->nullable();
            $table->text('ph')->nullable();
            $table->text('bl')->nullable();
            $table->tinyInteger('is_deleted')->default('0');
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
        Schema::dropIfExists('attendances');
    }
}
