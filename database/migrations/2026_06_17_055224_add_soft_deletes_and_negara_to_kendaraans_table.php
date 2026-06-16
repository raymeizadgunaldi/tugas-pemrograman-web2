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
        Schema::table('kendaraans', function (Blueprint $table) {
                $table->enum('negara_asal', ['Indonesia', 'Arab', 'Jepang', 'Belanda', 'Singapura', 'Inggris'])->default('Indonesia');
                $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kendaraans', function (Blueprint $table) {
                $table->dropColumn('negara_asal');
                $table->dropSoftDeletes();
        });
    }
};