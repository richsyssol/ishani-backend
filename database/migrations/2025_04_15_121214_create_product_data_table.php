<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {

        // Then create product_data table with foreign key
        Schema::create('product_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        // Finally create product_features table
        Schema::create('product_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_data_id')->constrained('product_data')->cascadeOnDelete();
            $table->string('feature');
            $table->timestamps();
        });
    }

    public function down()
    {
        // Drop tables in reverse order to avoid foreign key errors
        Schema::dropIfExists('product_features');
        Schema::dropIfExists('product_data');
    }
};
