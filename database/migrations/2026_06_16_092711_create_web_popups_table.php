<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_popups', function (Blueprint $table) {
            $table->id();
            $table->boolean('enabled')->default(0);
            $table->string('template_id')->default('GoBizOriginal');
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_popups');
    }
};
