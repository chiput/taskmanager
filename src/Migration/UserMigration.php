<?php
namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class UserMigration
{
	public function createTable()
	{
		if(!Capsule::schema()->hasTable('users')) {
			Capsule::schema()->create('users', function(Blueprint $table)
				{
					$table->increments('id');
					$table->string('username', 30);
					$table->string('password', 32);
					$table->char('role', 1);
					$table->timestamps();
					$table->softDeletes();
				});
		}
	}
}