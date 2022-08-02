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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->mediumText('sammary')->nullable();
            $table->longText('description')->nullable();
            $table->longText('additional_info')->nullable();
            $table->integer('strock')->default(0);
            $table->unsignedBigInteger('cat_id');
            $table->string('image');
            $table->string('bid_price')->default(0);
            $table->string('best_bid_price')->default(0);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('active')->nullable()->default(1);

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
        Schema::dropIfExists('products');
    }
};
