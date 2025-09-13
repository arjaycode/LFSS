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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id()->unsigned()->primary()->autoIncrement();
            $table->bigInteger('user_id')->unsigned();
            $table->string('type', '50');
            $table->string('title');
            $table->text('message');
            $table->json('data')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            // foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // indexes
            $table->index(['user_id', 'read_at'], 'idx_user_read');
            $table->index('type', 'idx_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropIndex('idx_user_read');
            $table->dropIndex('idx_type');
        });
        Schema::dropIfExists('notifications');
    }
};
