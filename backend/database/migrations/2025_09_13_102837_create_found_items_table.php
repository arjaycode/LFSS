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
        Schema::create('found_items', function (Blueprint $table) {
            $table->id()->unsigned()->primary()->autoIncrement();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('item_name');
            $table->text('description');
            $table->string('color', 100)->nullable();
            $table->string('brand', 100)->nullable();
            $table->date('date_found');
            $table->bigInteger('location_id')->unsigned();
            $table->text('location_description')->nullable();
            $table->string('current_location')->nullable();
            $table->json('photos')->nullable();
            $table->enum('status', ['unclaimed', 'claimed', 'disposed'])->default('claimed');
            $table->bigInteger('matched_lost_item_id')->unsigned()->nullable();
            $table->bigInteger('claimed_by_user_id')->unsigned()->nullable();
            $table->timestamp('claimed_at')->nullable();
            $table->timestamps();
            // foreign ids
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('claimed_by_user_id')->references('id')->on('users');

            // indexes
            $table->index('user_id', 'idx_user');
            $table->index('category_id', 'idx_category');
            $table->index('status', 'idx_status');
            $table->index('date_found', 'idx_date_found');
            $table->fullText(['item_name', 'description', 'color', 'brand'], 'idx_search');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('found_items', function (Blueprint $table) {
            $table->dropIndex('idx_user');
            $table->dropIndex('idx_category');
            $table->dropIndex('idx_status');
            $table->dropIndex('idx_date_found');
            $table->dropIndex('idx_search');
        });

        Schema::dropIfExists('found_items');
    }
};
