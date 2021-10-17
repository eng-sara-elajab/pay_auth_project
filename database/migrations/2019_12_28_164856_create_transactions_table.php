<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tran_amount');
            $table->string('tran_from');
            $table->string('tran_to');
            $table->timestamp('tran_created')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('tran_status');
            $table->string('tran_type');
            $table->text('tran_info')->default(null);
            $table->string('tran_uuid')->default(null);
            $table->integer('tran_by')->default(0);
            $table->integer('tran_for')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
