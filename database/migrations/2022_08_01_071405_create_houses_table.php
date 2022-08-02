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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('merchant_id');
            $table->string('house_number')->nullable()->default(null);
            $table->string('phone');
            $table->string('name');
            $table->tinyInteger('sex');
            $table->tinyInteger('house_type')->comment('房源类型');
            $table->tinyInteger('checking_way');
            $table->tinyInteger('purpose');
            $table->decimal('min_price')->default(0.00);
            $table->decimal('selling_price')->default(0.00);
            $table->string('floor')->nullable()->default(null);
            $table->integer('chamber')->default(0);
            $table->integer('hall')->default(0);
            $table->integer('bathroom')->default(0);
            $table->integer('kitchen')->default(0);
            $table->integer('balcony')->default(0);
            $table->string('complex')->nullable()->default(null);
            $table->string('building')->nullable()->default(null);
            $table->string('unit')->nullable()->default(null);
            $table->string('room')->nullable()->default(null);
            $table->integer('year')->nullable()->default(0);
            $table->integer('building_area')->default(0);
            $table->string('usable_area')->default(0);
            $table->tinyInteger('decoration')->default(2);
            $table->json('direction')->nullable()->default(null);
            $table->decimal('duty')->nullable()->default(null);
            $table->string('remark')->nullable()->default(null);
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
        Schema::dropIfExists('houses');
    }
};
