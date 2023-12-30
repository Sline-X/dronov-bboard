<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bbs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description');
            $table->float('price');
            $table->foreignId('user_id')->constrained()
                  ->onDelete('cascade');
            $table->timestamps();
            $table->index('created_at');
//            $table->softDeletes();
//            ->default('asd');
//            $table->float('random')
//                ->default(new Expression('RAND()'));
//            $table->text('desc')->nullable();
//            $table->unsignedTinyInteger('order')->index();
//            $table->string('name', 40)->index('idx_name');
//            $table->index(['name', 'order']); //индекс по нескольким полям
//            $table->rawIndex(new Expression('upper(name)'), 'idx_name');
//            $table->unsignedBigInteger('rubric_id');
//            $table->foreign('rubric_id')->references('id')->on('rubrics');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bbs');
    }
};
