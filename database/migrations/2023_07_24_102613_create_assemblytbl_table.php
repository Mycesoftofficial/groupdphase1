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
        Schema::create('assemblytbl', function (Blueprint $table) {
            $table->id();
            $table->string('CName');
            $table->string('CCode')->unique();
            $table->string('Login')->nullable();
            $table->string('Location');
            $table->string('GPSAddress');
            $table->string('District');
            $table->string('Password');
            $table->string('Area');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assemblytbl');
    }
};
