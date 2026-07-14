<?php

/*
 |--------------------------------------------------------------------------
 | GoBiz vCard SaaS
 |--------------------------------------------------------------------------
 | Developed by NativeCode © 2021 - https://nativecode.in
 | All rights reserved
 | Unauthorized distribution is prohibited
 |--------------------------------------------------------------------------
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_id')->uniqid();
            $table->string('in_app_purchase_id')->nullable();
            $table->string('dodo_payments_plan_price_id')->nullable();
            $table->string('paddle_plan_price_id')->nullable();
            $table->string('plan_type');
            $table->string('plan_name');
            $table->longText('plan_description')->nullable();
            $table->double('plan_price', 15,2);
            $table->bigInteger('trial')->default(0);
            $table->bigInteger('ai_credits')->default(0);
            $table->bigInteger('validity');
            $table->bigInteger('no_of_vcards')->nullable();
            $table->bigInteger('no_of_services')->nullable();
            $table->bigInteger('no_of_vcard_products')->nullable();
            $table->bigInteger('no_of_links')->nullable();
            $table->bigInteger('no_of_payments')->nullable();
            $table->bigInteger('no_of_galleries')->nullable();
            $table->bigInteger('no_testimonials')->nullable();
            $table->boolean('business_hours')->default(1);
            $table->boolean('contact_form')->default(1);
            $table->boolean('appointment')->default(1);
            $table->boolean('service_booking')->default(1);
            $table->boolean('custom_domain')->default(0);
            $table->bigInteger('nfc_card')->default(0);
            $table->boolean('google_wallet')->default(0);
            $table->bigInteger('no_of_google_wallets')->default(0);
            $table->bigInteger('no_of_enquires')->nullable();
            $table->bigInteger('no_of_stores')->nullable();
            $table->bigInteger('no_of_categories')->nullable();
            $table->bigInteger('no_of_store_products')->nullable();
            $table->boolean('pwa')->default(1);
            $table->boolean('password_protected')->default(0);
            $table->boolean('advanced_settings')->default(0);
            $table->bigInteger('storage')->nullable();
            $table->boolean('additional_tools')->default(0);
            $table->boolean('personalized_link')->default(0);
            $table->boolean('hide_branding')->default(0);
            $table->boolean('free_setup')->default(0);
            $table->boolean('free_support')->default(1);
            $table->boolean('recommended')->default(0);
            $table->boolean('is_private')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
