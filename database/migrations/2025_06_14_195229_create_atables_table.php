<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        
        Schema::create('Atables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->float('price');
            $table->unsignedBigInteger('table_kind_id');
            $table->unsignedBigInteger('seller_id')->Nullable();
            $table->text('description');
            $table->string('image_path')->nullable();

            $table->foreign('table_kind_id')->references('id')->on('table_kinds')->nullOnDelete();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atables');
    }
};
