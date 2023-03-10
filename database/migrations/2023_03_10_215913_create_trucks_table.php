<?php

use App\Models\Stations;
use App\Models\TruckModels;
use App\Models\Trucks;
use App\Models\User;
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
        Schema::create(Trucks::TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('station_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->bigInteger('mileage')->default(0);
            $table->bigInteger('mileage_last_service')->default(0);
            $table->bigInteger('mileage_next_service')->default(0);

            $table->foreign('user_id')
                ->references('id')
                ->on(User::TABLE)
                ->onDelete('set null');

            $table->foreign('model_id')
                ->references('id')
                ->on(TruckModels::TABLE)
                ->onDelete('cascade');

            $table->foreign('station_id')
                ->references('id')
                ->on(Stations::TABLE)
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
