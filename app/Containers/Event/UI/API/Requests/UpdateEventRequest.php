<?php

namespace App\Containers\Event\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateEventRequest.
 */
class UpdateEventRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'manage-event',
        'roles'       => 'admin',
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
//            'id' => 'required|exists:events,id',
            'title' => 'max:255',
            'city' => 'exists:locations,name',
            'province' => 'exists:locations,name',
            'address' => 'max:255',
            'event_date'    =>  'date_format:YmdHiT',
            'event_image'    =>  'image',
            'lat'    =>  'numeric',
            'long'    =>  'numeric',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|isOwner',
        ]);
    }
}
