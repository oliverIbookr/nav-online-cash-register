<?php

namespace NavOnlineCashRegister\Request;

/**
 * responseEnvelope: QueryCashRegisterStatusResponse
 */
class QueryCashRegistersRequestXml extends AbstractBaseRequest
{
    /**
     * @var string
     */
    protected $url = '/queryCashRegisterFile/{version}/queryCashRegisterStatus';
    /**
     * @var string
     */
    protected $rootName = 'QueryCashRegisterStatusRequest';

    /**
     * @return string
     */
    public function __toString()
    {
        $requestBody = '<api:cashRegisterStatusQuery>' . "\n";
        $requestBody .= '            </api:cashRegisterStatusQuery>';
        return $requestBody;
    }
}