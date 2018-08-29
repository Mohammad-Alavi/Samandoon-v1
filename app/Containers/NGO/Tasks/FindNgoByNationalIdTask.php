<?php

namespace App\Containers\NGO\Tasks;

use App\Ship\Parents\Tasks\Task;

class FindNGOByNationalIdTask extends Task
{
    public function run($national_id)
    {
        $params = http_build_query(array(
            'Request' => '{"ClassTypeName":"TRM.hndlr.Classes.CompanyPublicInfoController","MethodName":"SearchData","DataParamType":"TRM.TypeDefinition.CompanyPublicInfoSerchParam","MainEntityType":"","DataParam":"{\"Nationalcode\":\"' . $national_id . '\",\"Registernumber\":\"\",\"UnitId\":null,\"CompanyTypeId\":\"0\"}"}',
        ));

        $ch = curl_init();
        //Tell cURL that it should only spend 10 seconds
        //trying to connect to the URL in question.
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        //A given cURL operation should only take
        //10 seconds max.
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
        curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
        curl_setopt($ch, CURLOPT_URL, 'http://irsherkat.ssaa.ir/hndlr/GeneralHandler.ashx?Id=34');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $curlError = curl_error($ch);
        $curlErrno = curl_errno($ch);
        curl_close($ch);
        $result = json_decode($output, true);
//        if (empty($result['ResultList']['0']['NationalCode'])) {
        if ($curlErrno) {
            throw new \Exception($curlError, $curlErrno);
        } else {
            return $result;
        }
    }
}
