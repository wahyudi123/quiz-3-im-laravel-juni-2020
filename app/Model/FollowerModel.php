<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;
	
	class FollowerModel {
		public static function get_all(){
			$items = DB::table('follower')->get();
			return $items;
		}

		public static function save($data){
			unset($data["_token"]);
			$new_items = DB::table('follower')->insert($data);
			return $new_items;
		}
	}
?>