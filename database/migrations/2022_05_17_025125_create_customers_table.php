<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('customer_code')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_group')->nullable();
            $table->string('customer_userid')->nullable();
            $table->string('customer_password')->nullable();
            $table->string('customer_cabang')->nullable();
            $table->string('customer_territory')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_province')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('customer_district')->nullable();
            $table->string('customer_village')->nullable();
            $table->string('customer_postal_code')->nullable();
            $table->string('customer_contact')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('customer_long')->nullable();
            $table->string('customer_lat')->nullable();
            $table->string('customer_ktp_name')->nullable();
            $table->string('customer_ktp_no')->nullable();
            $table->string('customer_npwp_no')->nullable();
            $table->string('customer_npwp_address')->nullable();
            $table->string('customer_sppkp_address')->nullable();
            $table->string('customer_tax_address')->nullable();
            $table->string('customer_phone1')->nullable();
            $table->string('customer_phone2')->nullable();
            $table->string('customer_birthdate')->nullable();
            $table->string('sales_philips_name')->nullable();
            $table->string('sales_supow_name')->nullable();
            $table->string('sales_pengaju')->nullable();
            $table->string('pic_sas')->nullable();
            $table->string('customer_ktp_image')->nullable();
            $table->string('customer_npwp_image')->nullable();
            $table->string('customer_sppkp_image')->nullable();
            $table->string('customer_store1_image')->nullable();
            $table->string('customer_store2_image')->nullable();
            $table->string('customer_check')->default('No')->nullable();
            $table->string('admin_check')->default('No')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('update_time_customer')->nullable();
            $table->string('update_time_admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
