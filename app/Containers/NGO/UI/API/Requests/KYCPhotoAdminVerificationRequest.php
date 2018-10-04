<?php

namespace App\Containers\NGO\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class KYCPhotoAdminVerificationRequest.
 */
class KYCPhotoAdminVerificationRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    // protected $transporter = \App\Ship\Transporters\DataTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => 'admin',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
         'photo_id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
         'photo_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'judgment' => 'required|in:' .
                config('samandoon.kyc_photo_status.invalid') . ',' .
                config('samandoon.kyc_photo_status.verified') . ',' .
                config('samandoon.kyc_photo_status.sent'),
            'text' => 'required'
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
