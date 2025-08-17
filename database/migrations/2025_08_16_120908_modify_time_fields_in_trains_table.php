<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            // Modifica i campi da date a time
            $table->dateTime('departure_time')->change();
            $table->dateTime('arrival_time')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            // Ripristina i campi a date se necessario fare rollback
            $table->date('departure_time')->change();
            $table->date('arrival_time')->change();
        });
    }
};
