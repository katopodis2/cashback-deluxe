<?php

namespace App\Http\Controllers;

use App\services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $storeService;

    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;

    }

    public function allStores()
    {
        $this->storeService->getAllStores();

    }

    public function store(Request $request)
    {
      $this->storeService->storeCategory($request->id);

    }
}
