<?php

namespace App\Containers\NGO\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateNgoRequest.
 */
class UpdateNgoRequest extends Request
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
         'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
//            'id'    => 'required|exists:ngos,id',
            'area_of_activity' => 'max:255|in:شهرستان,استان,ملی,بین المللی,فرااستان',
            'public_name' => 'bail|min:5|unique:ngos,public_name',
            'city' => 'exists:locations,name',
            'province' => 'exists:locations,name',
            'zip_code' => 'max:255',
            'ngo_logo' => 'image',
            'ngo_banner' => 'image',
            'phone' => 'json',
            'subject' => 'json',
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
