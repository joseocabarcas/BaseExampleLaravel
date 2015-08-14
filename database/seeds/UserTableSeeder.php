<?php  
use Illuminate\Database\Seeder;
/**
* 
*/
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		\DB::table('users')->insert(array(
			'name' => 'Jose',
			'email' => 'jose.omar94@hotmail.com',
			'password' => \Hash::make('12345')

		));

	}
}
?>