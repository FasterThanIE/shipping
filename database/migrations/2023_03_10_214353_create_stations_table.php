<?php

use App\Models\Cities;
use App\Models\Stations;
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
        Schema::create(Stations::TABLE, function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id');
            $table->integer('deliveries')->nullable();
            $table->boolean('active')->default(true);
            $table->tinyInteger('size')->default(0);

            $table->foreign('user_id')
                ->references('id')
                ->on(User::TABLE);

            $table->foreign('city_id')
                ->references('id')
                ->on(Cities::TABLE);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stations');
    }
};
