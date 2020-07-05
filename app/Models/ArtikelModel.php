<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;
	
	class ArtikelModel {
		public static function get_all(){
			$artikels = DB::table('artikel')->get();
			return $artikels;
		}

		public static function save($data){
			unset($data["_token"]);
			$slug = str_replace(" ", "-", $data['judul']);
			$new_items = DB::table('artikel')->insert(
					[
						'judul' => $data['judul'],
						'isi'   => $data['isi'],
						'tag'   => $data['tag'],
						'slug'  => $slug
					]
				);
			return $new_items;
		}

		public static function find_by_id($id){
			$artikels = DB::table('artikel')->where('idartikel', $id)->first();
			return $artikels;
		}

		public static function update($id, $data){
			unset($data["_token"]);
			$slug = str_replace(" ", "-", $data['judul']);
			$new_items = DB::table('artikel')->where('idartikel', $id)->update(
					[
						'judul' => $data['judul'],
						'isi'   => $data['isi'],
						'tag'   => $data['tag'],
						'slug'  => $slug
					]
				);
			return $new_items;
		}

		public static function destroy($id){
			$deleted = DB::table('artikel')->where('idartikel', $id)->delete();
			return $deleted;
		}
	}
?>