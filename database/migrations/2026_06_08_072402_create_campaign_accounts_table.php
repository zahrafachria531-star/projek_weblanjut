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
        Schema::table('campaign_accounts', function (Blueprint $table) {
            $table->foreignId('campaign_id')->unique()->constrained()->onDelete('cascade');
            $table->string('bank_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaign_accounts', function (Blueprint $table) {
            $table->dropForeign(['campaign_id']);
            $table->dropUnique(['campaign_id']);
            $table->dropColumn(['campaign_id', 'bank_name']);
        });
    }
};
