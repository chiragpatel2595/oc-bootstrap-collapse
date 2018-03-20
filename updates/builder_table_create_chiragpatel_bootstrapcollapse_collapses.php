<?php namespace ChiragPatel\BootstrapCollapse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChiragpatelBootstrapcollapseCollapses extends Migration
{
    public function up()
    {
        Schema::create('chiragpatel_bootstrapcollapse_collapses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chiragpatel_bootstrapcollapse_collapses');
    }
}