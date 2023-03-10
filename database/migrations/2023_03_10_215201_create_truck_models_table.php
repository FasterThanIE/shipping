<?php

use App\Models\TruckBrands;
use App\Models\TruckModels;
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
        Schema::create(TruckModels::TABLE, function (Blueprint $table) {

            $table->id();
            $table->string('name')->unique();
            $table->tinyInteger('type')->default(TruckModels::TYPE_TRUCK_AMERICAN);
            $table->unsignedBigInteger('brand_id');

            $table->foreign('brand_id')
                ->references('id')
                ->on(TruckBrands::TABLE);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_models');
    }
};
