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
            Schema::create('travel_policies', function (Blueprint $table) {
            // id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->id();

            // name VARCHAR(255) NOT NULL
            $table->string('name');

            // description TEXT NOT NULL
            $table->text('description');

            // DECIMAL(8, 2) NOT NULL
            $table->decimal('max_transport_cost', 8, 2);
            $table->decimal('max_hotel_cost', 8, 2);
            $table->decimal('max_meal_cost', 8, 2);
            $table->decimal('max_daily_allowance', 8, 2);

            // status ENUM NOT NULL (isi array dengan opsi status yang Anda inginkan)
            $table->enum('status', ['active', 'inactive', 'draft']);

            // created_at TIMESTAMP NOT NULL
            $table->timestamp('created_at');
            
            // Catatan: Jika ingin menggunakan standar Laravel (created_at & updated_at),
            // Anda bisa menggunakan $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
