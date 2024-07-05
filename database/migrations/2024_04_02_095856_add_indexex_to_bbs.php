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
        Schema::table('bbs', function (Blueprint $table) {
            $table->index('title', 'bbs_title_index');
            $table->index('description', 'bbs_description_index');
            $table->index('price', 'bbs_price_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bbs', function (Blueprint $table) {
            $table->dropIndex('bbs_title_index');
            $table->dropIndex('bbs_description_index');
            $table->dropIndex('bbs_price_index');
        });
    }
};
