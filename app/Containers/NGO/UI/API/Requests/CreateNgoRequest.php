<?php

namespace App\Containers\NGO\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateNgoRequest.
 */
class CreateNgoRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'manage-ngo',
        'roles'       => 'user|admin',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        //'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|unique:ngos,name',
            'subject' => 'required|max:255',
            'area_of_activity' => 'required|max:255',
            'registration_date' => 'date_format:YmdHiT',
            'license_date' => 'date_format:YmdHiT',
            'registration_number' => 'unique:ngos,registration_number',
            'national_number' => 'unique:ngos,national_number',
            'license_number' => 'unique:ngos,license_number',
            'logo_photo' => 'image',
            'banner_photo' => 'image',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
