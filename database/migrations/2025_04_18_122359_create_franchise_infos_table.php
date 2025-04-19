<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('franchise_infos', function (Blueprint $table) {
            $table->id();
            $table->text('benefits')->nullable();
            $table->text('support')->nullable();
            $table->json('expansion_cities')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('franchise_infos');
    }
};