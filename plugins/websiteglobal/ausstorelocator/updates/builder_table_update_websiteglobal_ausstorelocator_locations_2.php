<?php namespace WebsiteGlobal\AusStoreLocator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebsiteglobalAusstorelocatorLocations2 extends Migration
{
    public function up()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->string('email', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
