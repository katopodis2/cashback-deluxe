<?php


namespace App\Services\Admin;


use App\Models\Faq;
use App\Validators\Admin\FaqValidator;

class FaqService extends BaseService
{
    /**
     * FaqService constructor.
     * @param FaqValidator $faqValidator
     */
    public function __construct(FaqValidator $faqValidator)
    {
        $this->baseValidator = $faqValidator;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $items = Faq::paginate(15, ["id", 'question', "answer", "is_important"]);
        return $items;
    }

    /**
     * @param $data
     * @return bool
     */
    public function store($data)
    {
        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        return Faq::create($data);

    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $item = Faq::find($id, ['id', 'question', "answer", "updated_at", "is_important"]);
        return $item;
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function update($id, $data)
    {
        $item = Faq::find($id, [
            'id',
        ]);

        if (is_null($item)) {
            return false;
        }

        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        return $item->update($data);
    }

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $deleted = Faq::destroy($id);
        return $deleted;
    }

}
