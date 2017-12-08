<?php

/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 1/9/2017
 * Time: 11:45 AM
 */
namespace App\Backend\Post;

use App\Core\ReturnMessage;
use App\Core\Utility;
use DB;
use Illuminate\Support\Facades\Input;

class PostRepository implements PostRepositoryInterface
{
    public function getObjs()
    {
        $objs = Post::whereNull('deleted_at')->get();
        return $objs;
    }

    public function getArrays()
    {
        $tbName = (new Post())->getTable();
        $arr = DB::select("SELECT * FROM $tbName WHERE deleted_at IS NULL");
        return $arr;
    }

    public function create($paramObj)
    {
        $returnedObj = array();
        $returnedObj['aceplusStatusCode'] = ReturnMessage::INTERNAL_SERVER_ERROR;

        try {
            $tempObj = Utility::addCreatedBy($paramObj);
            $tempObj->save();

            $returnedObj['aceplusStatusCode'] = ReturnMessage::OK;
            return $returnedObj;
        }
        catch(\Exception $e){
            $returnedObj['aceplusStatusMessage'] = $e->getMessage();
            return $returnedObj;
        }
    }

    public function update($paramObj)
    {
        $returnedObj = array();
        $returnedObj['aceplusStatusCode'] = ReturnMessage::INTERNAL_SERVER_ERROR;

        try {
            $tempObj = Utility::addUpdatedBy($paramObj);
            $tempObj->save();

            $returnedObj['aceplusStatusCode'] = ReturnMessage::OK;
            return $returnedObj;
        }
        catch(\Exception $e){

            $returnedObj['aceplusStatusMessage'] = $e->getMessage();
            return $returnedObj;
        }
    }

    public function delete($id)
    {
            $tempObj = Post::find($id);
            $tempObj = Utility::addDeletedBy($tempObj);
            $tempObj->deleted_at = date('Y-m-d H:m:i');
            $tempObj->save();
    }

    public function getObjByID($id){
        $post = Post::find($id);
        return $post;
    }

    public function getObjByPage($page_id)
    {
        $posts = Post::whereNull('deleted_at')
            ->where('pages_id','=',$page_id)
            ->get();
        return $posts;
    }

    public function getPostsForAutocomplete()
    {
        $term = Input::get('term');
        $results = array();

        $posts = DB::select("SELECT * FROM posts WHERE name like '%$term%' OR description like '%$term%' OR content like '%$term%' OR title like '%$term%'");

        foreach($posts as $post){
            array_push($results,$post->name);
        }
        return $results;
    }

    public function getPostsByTerm($term)
    {
        // $results = DB::select("SELECT * FROM posts WHERE name like '%$term%' OR description like '%$term%' OR content like '%$term%' OR title like '%$term%'");
        $results = Post::where('name', 'like', '%'.$term.'%')
                            ->orWhere('description', 'like', '%'.$term.'%')
                            ->orWhere('content', 'like', '%'.$term.'%')
                            ->orWhere('title', 'like', '%'.$term.'%')
                            ->get();

        return $results;
    }

    public function getObjsByExcludedArray($excluded_array)
    {
        $objs = Post::whereNull('deleted_at')->whereNotIn('id',$excluded_array)->get();
        return $objs;
    }
}
