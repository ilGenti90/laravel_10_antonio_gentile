<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    DB::table('products')->whereNull('img')->update(['img' => 'img/default.jpg']);

    Schema::table('products', function (Blueprint $table) {
        $table->string('img')->nullable()->default('img/default.jpg')->change();
    });
}

public function down(): void
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('img')->nullable()->change();
    });
}

};