<?php namespace WebsiteGlobal\AusStoreLocator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebsiteglobalAusstorelocatorLocations extends Migration
{
    public function up()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->boolean('disable')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->dropColumn('disable');
        });
    }
}
