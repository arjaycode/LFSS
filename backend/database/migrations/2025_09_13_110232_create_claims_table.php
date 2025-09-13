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
        Schema::create('claims', function (Blueprint $table) {
            $table->id()->unsigned()->primary()->autoIncrement();
            $table->bigInteger('lost_item_id')->unsigned();
            $table->bigInteger('found_item_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->text('reason');
            $table->text('proof_details')->nullable();
            $table->json('proof_photos')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->text('admin_notes')->nullable();
            $table->timestamp('reviewed_at');
            $table->timestamps();
            //foreign keys
            $table->foreign('lost_item_id')->references('id')->on('lost_items')->onDelete('cascade');
            $table->foreign('found_item_id')->references('id')->on('found_items')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('users');
            //indexes
            $table->index('lost_item_id', 'idx_lost_item');
            $table->index('found_item_id', 'idx_found_item');
            $table->index('user_id', 'idx_user');
            $table->index('status', 'idx_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropIndex('idx_lost_item');
            $table->dropIndex('idx_found_item');
            $table->dropIndex('idx_user');
            $table->dropIndex('idx_status');
        });
        Schema::dropIfExists('claims');
    }
};
