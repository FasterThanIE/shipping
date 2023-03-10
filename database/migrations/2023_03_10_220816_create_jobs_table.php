<?php

use App\Models\Cities;
use App\Models\Companies;
use App\Models\Jobs;
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
        Schema::create(Jobs::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('pending')->index();
            $table->decimal('weight', 11);
            $table->decimal('price', 11);
            $table->string('currency')->default(Jobs::CURRENCY_USD);
            $table->string('payment_type');
            $table->string('description')->nullable();
            $table->string('delivery_address');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('truck_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('destination');


            $table->foreign('destination')
                ->references('id')
                ->on(Cities::TABLE)
                ->onDelete('cascade');

            $table->foreign('truck_id')
                ->references('id')
                ->on(Trucks::TABLE)
                ->onDelete('cascade');

            $table->foreign('company_id')
                ->references('id')
                ->on(Companies::TABLE)
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on(User::TABLE)
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
