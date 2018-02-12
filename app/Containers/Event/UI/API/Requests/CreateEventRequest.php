<?php

namespace App\Containers\Event\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateEventRequest.
 */
class CreateEventRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'manage-event',
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
            'title' => 'required|max:255',
            'city' => 'required|exists:locations,name',
            'province' => 'required|exists:locations,name',
            'address' => 'max:255',
            'event_date'    =>  'required|date_format:YmdHiT',
            'event_image'    =>  'image',
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
