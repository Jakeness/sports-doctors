<?php namespace WebsiteGlobal\AusStoreLocator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebsiteglobalAusstorelocatorLocations4 extends Migration
{
    public function up()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
