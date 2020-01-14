<?php namespace WebsiteGlobal\AusStoreLocator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebsiteglobalAusstorelocatorLocations extends Migration
{
    public function up()
    {
        Schema::create('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('address', 191)->nullable();
            $table->string('address_1', 191)->nullable();
            $table->string('address_2', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('postcode', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('fax', 191)->nullable();
            $table->string('website', 191)->nullable();
            $table->string('lat', 191)->nullable();
            $table->string('lng', 191)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('websiteglobal_ausstorelocator_locations');
    }
}
