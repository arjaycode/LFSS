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
        Schema::create('lost_items', function (Blueprint $table) {
            $table->id()->unsigned()->primary()->autoIncrement();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('location_id')->nullable();
            // foreign ids
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('location_id')->references('id')->on('locations');

            $table->string('item_name');
            $table->text('description');
            $table->string('color')->nullable();
            $table->string('brand')->nullable();
            $table->date('date_lost');
            $table->text('location_description')->nullable();
            $table->boolean('is_urgent')->default(false);
            $table->boolean('is_valuable')->default(false);
            $table->json('photos')->nullable();
            $table->enum('status', ['active', 'matched', 'claimed', 'closed'])->default('active');
            $table->integer('matched_found_item_id')->unsigned()->nullable();
            $table->timestamp('claimed_at')->nullable();
            $table->timestamps();

            // indexes
            $table->index('user_id', 'idx_user');
            $table->index('category_id', 'idx_category');
            $table->index('status', 'idx_status');
            $table->index('date_lost', 'idx_date_lost');
            $table->fullText(['item_name', 'description', 'color', 'brand'], 'idx_search');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lost_items', function (Blueprint $table) {
            $table->dropIndex('idx_user');
            $table->dropIndex('idx_category');
            $table->dropIndex('idx_status');
            $table->dropIndex('idx_date_lost');
            $table->dropIndex('idx_search');
        });
        Schema::dropIfExists('lost_items');
    }
};
