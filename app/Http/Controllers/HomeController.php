<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 17.11.2020
 * Time: 23:33
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    public function index() {
        /*$query = DB::insert("INSERT INTO posts (title, text) VALUES (?, ?)", ['Статья 5', 'Text 5']);
        var_dump($query);*/

        /*DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL", [now(), now()]);*/

        DB::beginTransaction();
        try {
            DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [now()]);
            DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [now()]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }

        DB::delete("DELETE FROM posts WHERE id = ?", [4]);

        $posts = DB::select("SELECT *FROM posts WHERE id > :id", ['id' => 2]);
        return $posts;

    }

    public function test() {
        return __METHOD__;
    }

}