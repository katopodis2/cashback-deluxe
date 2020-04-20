<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 06.04.2020
 * Time: 12:35
 */

namespace App\services;


use App\models\StoreComment;

class CommentService
{
    public function createComment($request)
    {
        if ($request->advantages || $request->comment || $request->order_number || $request->disadvantages ) {
            StoreComment::create([
                'user_id' => $request->user_id,
                'store_id' => $request->store_id,
                'comment' => $request->comment ? $request->comment : null,
                'advantages' => $request->advantages ? $request->advantages : null,
                'disadvantages' => $request->disadvantages ? $request->disadvantages : null,
                'order_number' => $request->order_number ? $request->order_number : null,

            ]);
        }
    }

    public function getComments(){

        $comments = StoreComment::get();
        return $comments;

    }













}