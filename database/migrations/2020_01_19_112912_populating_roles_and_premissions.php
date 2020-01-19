<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Spatie\Permission\Models\Permission;

class PopulatingRolesAndPremissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $attributesArray = [
            ['name' => "admin"],
            ['name' => "customer"]
        ];

        foreach($attributesArray as $attribute){
            Permission::create($attribute);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('permissions')->truncate();
    }
}
