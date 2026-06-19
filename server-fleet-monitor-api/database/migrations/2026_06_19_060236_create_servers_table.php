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
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string("hostname", length: 255);
            $table->ipAddress("ip_address");
            $table->string("environment", length: 50);
            $table->string("os_type", length: 50);
            $table->string("description", length: 255);
            $table->string("status", length: 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
