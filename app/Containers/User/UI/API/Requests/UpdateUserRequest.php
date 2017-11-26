<?php

namespace App\Containers\User\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateUserRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserRequest extends Request
{

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'update-users',
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
     * Defining the URL parameters (`/stores/999/items`) allows applying
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
            'email'    => 'email|max:40|unique:users,email',
            'id'       => 'required|exists:users,id',
            'password' => 'min:6|max:40',
            'first_name'     => 'min:2|max:50',
            'last_name'     => 'min:2|max:50',
            'avatar'    => 'image',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        // is this an admin who has access to permission `update-users`
        // or the user is updating his own object (is the owner).

        return $this->check([
            'hasAccess|isOwner',
        ]);
    }
}
