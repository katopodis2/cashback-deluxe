<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 06.04.2020
 * Time: 12:35
 */

namespace App\Services;


use App\Models\Store;
use App\models\StoreComment;
use App\Validators\ReviewValidator;

class CommentService extends BaseService
{

    /**
     * @param $data
     * @param $store
     * @return mixed
     */
    public function createComment($data, $store)
    {
        $data = $data[0];
        $data['user_id'] = auth()->id();
        $data['store_id'] = $store->id;

        return StoreComment::create($data);

//        if ($request->advantages || $request->comment || $request->order_number || $request->disadvantages ) {
//            StoreComment::create([
//                'user_id' => $request->user_id,
//                'store_id' => $request->store_id,
//                'comment' => $request->comment ? $request->comment : null,
//                'advantages' => $request->advantages ? $request->advantages : null,
//                'disadvantages' => $request->disadvantages ? $request->disadvantages : null,
//                'order_number' => $request->order_number ? $request->order_number : null,
//
//            ]);
//        }
    }

    /**
     * @param $data
     * @param $store
     * @return mixed
     */
    public function updateComment($data, $store)
    {
        $data = $data['comm'][0];
        return StoreComment::where('store_id', $store->id)->where('user_id', \auth()->id())->update($data);
    }

    public function getComments(){

        $comments = StoreComment::get();
        return $comments;

    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getMyReviewCommentThisStore($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store){
            return false;
        }
        $comm = StoreComment::where('store_id', $store->id)->where('user_id', \auth()->id())->first();
        if (!$comm){
            return false;
        }

        return array_filter($comm->toArray());
    }

    /**
     * @param $slug
     * @return bool
     */
    public function getAllReviewCommentThisStore($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store){
            return false;
        }
        $comm = StoreComment::where('store_id', $store->id)->paginate(15);
            if (!$comm){
            return false;
        }

        return $comm->groupBy('user_id');
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getStoreBySlug($slug)
    {
        return Store::where('slug', $slug)->first(['id']);
    }













}
