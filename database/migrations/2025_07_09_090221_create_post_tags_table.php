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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained('posts', 'post_id')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags', 'tag_id')->onDelete('cascade');
            $table->primary(['post_id', 'tag_id']);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
