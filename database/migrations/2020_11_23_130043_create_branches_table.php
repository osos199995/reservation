<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->text('phone');
            $table->string('email');
            $table->string('password');
            $table->integer('vendor_id');
            $table->integer('city_id');
            $table->integer('area_id');
            $table->text('piece_en');
            $table->text('piece_ar');
            $table->text('longitude');
            $table->text('lattiude');
            $table->text('branch_type_id');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('branches');
    }
}
