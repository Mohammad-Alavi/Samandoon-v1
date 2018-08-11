<?php

namespace App\Containers\Settings\Tasks;

use App\Containers\Settings\Data\Criterias\OrderByKeyAscendingCriteria;
use App\Containers\Settings\Data\Repositories\SettingRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSettingsTask extends Task
{

    /**
     * @var SettingRepository
     */
    private $repository;

    /**
     * GetAllSettingsTask constructor.
     *
     * @param SettingRepository $repository
     */
    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        $setting_collection = $this->repository->all();
        foreach ($setting_collection as $setting)
        {
            $setting_object[$setting->key] = $setting->value;
        }

        return $setting_object;
    }

    /**
     * @return SettingRepository
     */
    public function ordered()
    {
        return $this->repository->pushCriteria(new OrderByKeyAscendingCriteria());
    }
}
