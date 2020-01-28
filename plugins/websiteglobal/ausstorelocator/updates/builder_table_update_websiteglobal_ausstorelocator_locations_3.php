<?php namespace WebsiteGlobal\AusStoreLocator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebsiteglobalAusstorelocatorLocations3 extends Migration
{
    public function up()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->string('doctor_name', 191);
            $table->string('practice_name', 191);
        });
    }
    
    public function down()
    {
        Schema::table('websiteglobal_ausstorelocator_locations', function($table)
        {
            $table->dropColumn('doctor_name');
            $table->dropColumn('practice_name');
        });
    }
}
