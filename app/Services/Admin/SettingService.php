<?php

namespace App\Services\Admin;

use App\Helpers\WebResponses;
use Carbon\Carbon;
use Spatie\Permission\Models\Permission;
use App\Models\Setting;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Helpers\ImageHelper;


class SettingService
{
    private static $instance;
    /**
     * @var Setting
     */
    public $settingModel;

    private function __construct()
    {
        $this->settingModel = new Setting();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new SettingService();
        }
        return self::$instance;
    }

    public function getAllSettings()
    {
        return $this->settingModel->get();
    }

    public function getLatestSettings()
    {
        return $this->settingModel->latest()->first();

    }


    public function getSetting($settingId)
    {
        return $this->settingModel->find($settingId);
    }


    public function updateSetting($setting, $settingData)
    {
        try {
            if ($settingData) {

                $updateData = [
                    'email' => $settingData['email'],
                    'address' => $settingData['address'],
                    'phone_no' => $settingData['phone_no'],
                    'footer_bottom_text' => $settingData['footer_bottom_text'],
                ];

                if (isset($settingData['header_logo'])) {
                    $settingData['header_logo'] = ImageHelper::uploadImage($settingData['header_logo'], 'header_logo', 'setting_images');
                    $updateData['header_logo'] = $settingData['header_logo'];
                }

                if (isset($settingData['footer_logo'])) {
                    $settingData['footer_logo'] = ImageHelper::uploadImage($settingData['footer_logo'], 'footer_logo', 'setting_images');
                    $updateData['footer_logo'] = $settingData['footer_logo'];
                }
                // Check and update only if the key exists in $settingData
                foreach ($updateData as $key => $value) {
                    if (array_key_exists($key, $settingData)) {
                        $setting->update([$key => $value]);
                    }
                }
            }
            return $settingData;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


}
