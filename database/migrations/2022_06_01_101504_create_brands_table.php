<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('brand_id');
            $table->string('brand_name')->unique();
            $table->string('brand_slug');
            $table->string('brand_remarks');
            $table->string('brand_image')->nullable();
            $table->integer('brand_feature')->nullable();
            $table->integer('brand_creator')->nullable();
            $table->integer('brand_editor')->nullable();
            $table->integer('brand_status')->default(1);
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
        Schema::dropIfExists('brands');
    }
}
