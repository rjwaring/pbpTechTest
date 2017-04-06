<?php

namespace PbpTechTestBundle\Test\Service;

use PbpTechTestBundle\Service\EstimateDeliveryDateService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EstimateDeliveryDateServiceTest extends WebTestCase
{
    /**
     * @var EstimateDeliveryDateService
     */
    private $service;

    public function setUp()
    {
        $this->service = new EstimateDeliveryDateService();
    }
}
