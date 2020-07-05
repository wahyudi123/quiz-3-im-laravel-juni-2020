<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;
	
	class ArtikelModel {
		public static function get_all(){
			$items = DB::table('artikel')->get();
			return $items;
		}

		public static function save($data){
			unset($data["_token"]);
			$new_items = DB::table('artikel')->insert($data);
			return $new_items;
		}
	}
?>