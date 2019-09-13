<?php

namespace MoySklad\Client;

use MoySklad\ApiClient;
use MoySklad\Entity\Account;
use MoySklad\Http\RequestExecutor;

class CounterpartyClient extends EntityClientBase
{
    /**
     * CounterpartyClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        parent::__construct($api, '/entity/counterparty/');
    }

    /**
     * @param string $counterpartyId
     * @param string $accountId
     * @param array $params
     * @return Account
     * @throws \MoySklad\Util\ApiClientException
     */
    public function getAccount(string $counterpartyId, string $accountId, array $params): Account
    {
        /** @var $account Account */
        $account = RequestExecutor::path($this->getApi(), $this->getPath().$counterpartyId.'/accounts/'.$accountId)->params($params)->get(Account::class);

        return $account;
    }
}