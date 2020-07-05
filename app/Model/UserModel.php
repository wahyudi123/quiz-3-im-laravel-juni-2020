<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;
	
	class UserModel {
		public static function get_all(){
			$items = DB::table('user')->get();
			return $items;
		}

		public static function save($data){
			unset($data["_token"]);
			$new_items = DB::table('user')->insert($data);
			return $new_items;
		}
	}
?>