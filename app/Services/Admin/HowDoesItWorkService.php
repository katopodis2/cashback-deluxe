<?php


namespace App\Services\Admin;


use App\Models\HowDoesItWork;
use App\Validators\Admin\HowWorkValidator;
use Illuminate\Support\Facades\File;

class HowDoesItWorkService extends BaseService
{

    /**
     * HowDoesItWorkService constructor.
     * @param HowWorkValidator $howWorkValidator
     */
    public function __construct(HowWorkValidator $howWorkValidator)
    {
        $this->baseValidator = $howWorkValidator;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $items = HowDoesItWork::paginate(15, ["id", 'title', "text", "img"]);
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

        $dataImage = $this->getDataImage($data);
        if (!empty($dataImage)) {
            $data['img'] = $dataImage['file_name'];
        }
        HowDoesItWork::create($data);

    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $item = HowDoesItWork::find($id, ['id', "title", "text", "img", "updated_at"]);
        return $item;
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function update($id, $data)
    {
        $item = HowDoesItWork::find($id, [
            'id',
        ]);

        if (is_null($item)) {
            return false;
        }

        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        if (!empty($data["img"])) {
            $dataImage = $this->getDataImage($data);

            if (!empty($dataImage)) {
                $data['img'] = $dataImage['file_name'];
            }
        }
        return $item->update($data);
    }

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $deleted = HowDoesItWork::destroy($id);
        return $deleted;
    }

    /**
     * @param $data
     * @param null $name
     * @return array|mixed
     */
    public function getDataImage($data, $name = null)
    {
        $image = $data['img'];
        $dataImage = [];

        if (!empty($image)) {
            $path = storage_path(\HowWorkPath::IMAGE_URL);
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $w = config('app_settings.how_work_image_width');
            $h = config('app_settings.how_work_image_height');
            $dataImage = $this->upload($image, $path, '', $w, '', $h, '', $name);
        }
        return $dataImage;
    }


}
