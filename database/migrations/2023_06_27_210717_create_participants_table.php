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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('commune')->nullable();
            $table->string('quartier')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('contact')->unique()->nullable();
            $table->string('matrim')->nullable();
            $table->string('cni')->nullable();
            $table->string('motivation')->nullable();
            $table->string('uid')->nullable();
            $table->boolean('solde')->default(false);
            $table->boolean('apte')->default(false);
            $table->boolean('ajourne')->default(false);
            $table->longText('lettre')->nullable();
            $table->unsignedBigInteger('entretient_day_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
