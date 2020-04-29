<?php


namespace App\Http\Controllers\Admin;


use App\Services\Admin\HowDoesItWorkService;
use Illuminate\Http\Request;

class HowDoesItWorkController extends BaseController
{

    /**
     * @var string
     */
    protected $baseView = "admin.how-work";
    /**
     * @var string
     */
    protected $baseFlashName = "How Work";

    /**
     * @var string
     */
    protected $baseRoute = "admin.how-work";
    /**
     * HowDoesItWorkController constructor.
     * @param HowDoesItWorkService $doesItWorkService
     */
    public function __construct(HowDoesItWorkService $doesItWorkService)
    {
        $this->baseService = $doesItWorkService;
    }

//    /**
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function index()
//    {
//        $items = $this->baseService->index();
//        return view("admin.how-work.index", compact("items"));
//    }
//
//    /**
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function create()
//    {
//        return view("admin.how-work.create");
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function store(Request $request)
//    {
//        $result = $this->baseService->store($request->all());
//        if ($result) {
//            flash('Car created', 'success');
//            return redirect()->route('admin.how-work.index');
//        }
//        return $this->redirectBackWithErrors('', 'HowDoesItWork');
//    }
//
//    /**
//     * @param $id
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
//     */
//    public function edit($id)
//    {
//        $item = $this->baseService->edit($id);
//        if (!$item) {
//            flash('Car not found!', 'danger');
//            return redirect()->back();
//        }
//        return view("admin.how-work.edit", compact('item'));
//    }
//
//    /**
//     * @param Request $request
//     * @param $id
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function update(Request $request, $id)
//    {
//        $result = $this->baseService->update($id, $request->all());
//        if ($result) {
//            flash('How Work updated', 'success');
//            return redirect()->route('admin.how-work.index');
//        }
//        return $this->redirectBackWithErrors('How-work can not be updated. Please see errors below');
//
//    }
//
//    /**
//     * @param $id
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function delete($id)
//    {
//        if ($this->baseService->delete($id)) {
//            flash('how work cancelled', 'success');
//            return redirect()->route('admin.how-work.index');
//        }
//        return $this->redirectBackWithErrors('how work can not be cancelled.');
//
//    }
}
