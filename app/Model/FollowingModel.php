<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;
	
	class FollowingModel {
		public static function get_all(){
			$items = DB::table('following')->get();
			return $items;
		}

		public static function save($data){
			unset($data["_token"]);
			$new_items = DB::table('following')->insert($data);
			return $new_items;
		}
	}
?>