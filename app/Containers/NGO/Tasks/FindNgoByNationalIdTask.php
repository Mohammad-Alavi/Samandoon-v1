<?php

namespace App\Containers\NGO\Tasks;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class FindNGOByNationalIdTask extends Task
{
    public function run($national_id)
    {
        $params = http_build_query(array(
            'Request' => '{"ClassTypeName":"TRM.hndlr.Classes.CompanyPublicInfoController","MethodName":"SearchData","DataParamType":"TRM.TypeDefinition.CompanyPublicInfoSerchParam","MainEntityType":"","DataParam":"{\"Nationalcode\":\"' . $national_id . '\",\"Registernumber\":\"\",\"UnitId\":null,\"CompanyTypeId\":\"0\"}"}',
        ));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://irsherkat.ssaa.ir/hndlr/GeneralHandler.ashx?Id=34');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($output, true);
        if (empty($result['ResultList']['0']['NationalCode'])) {
            throw new NotFoundException('NGO not found');
        } else {
            return $result;
        }
    }
}
