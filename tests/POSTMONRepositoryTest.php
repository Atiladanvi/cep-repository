<?php

namespace Atiladanvi\CepRepository\Tests;

use Atiladanvi\CepRepository\Repositories\CepPOSTMONRepository;
use PHPUnit\Framework\TestCase;

/**
 * Class POSTMONRepositoryTest
 * @package Atiladanvi\CepRepository\Tests
 */
class POSTMONRepositoryTest extends TestCase
{

    /**
     * repository
     *
     * @var
     */
    private $postmonRepository;

    private $address;
    /**
     * set up
     */
    protected function setUp()
    {
        $this->postmonRepository =  app(CepPOSTMONRepository::class);
        $this->address = $this->postmonRepository->get(66911030);
    }

    /**
     * test get cep
     */
    public function test_get()
    {
        $this->assertTrue($this->address['bairro'] === 'Maracajá (Mosqueiro)');
    }
}