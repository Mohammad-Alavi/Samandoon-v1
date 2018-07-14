<?php

namespace App\Containers\NGO\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class KYCNgoAdminVerificationRequest.
 */
class KYCNgoAdminVerificationRequest extends Request
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
         'ngo_id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        'ngo_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'judgment' => 'required|in:' .
                config('samandoon.ngo_verification_status.requested') . ',' .
                config('samandoon.ngo_verification_status.unverified') . ',' .
                config('samandoon.ngo_verification_status.in_progress') . ',' .
                config('samandoon.ngo_verification_status.verified')
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
