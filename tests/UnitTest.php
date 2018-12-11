<?php

namespace coenond\LrvlRspns\Test;

use Illuminate\Database\Eloquent\Model;
use Orchestra\Testbench\TestCase;
use Symfony\Component\HttpFoundation\Response;


class UnitTest extends TestCase
{
	const MOCK_DATA = ['Some Object Or Data Here'];
	const ERROR_MSG = "Oops, Something Went Wrong!";

	/** @test */
	function rspns_ok_response_200_without_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => [] ];

		$rspns = rspns_ok();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 200);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_ok_response_200_with_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => self::MOCK_DATA ];

		$rspns = rspns_ok(self::MOCK_DATA);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 200);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_created_response_201_without_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => [] ];

		$rspns = rspns_created();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 201);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_created_response_201_with_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => self::MOCK_DATA ];

		$rspns = rspns_created(self::MOCK_DATA);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 201);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_accepted_response_202_without_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => [] ];

		$rspns = rspns_accepted();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 202);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_accepted_response_202_with_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => self::MOCK_DATA ];

		$rspns = rspns_accepted(self::MOCK_DATA);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 202);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_no_content_response_204_without_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => [] ];

		$rspns = rspns_no_content();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 204);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_no_content_response_204_with_data()
	{
		$arrayAssertion = [ "status" => "success", "data" => self::MOCK_DATA ];

		$rspns = rspns_no_content(self::MOCK_DATA);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 204);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_bad_request_response_400_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_bad_request();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 400);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_bad_request_response_400_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_bad_request(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 400);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_unauthorized_response_401_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_unauthorized();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 401);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_unauthorized_response_401_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_unauthorized(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 401);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_not_found_response_404_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_not_found();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 404);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_not_found_response_404_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_not_found(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 404);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_method_not_allowed_response_405_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_method_not_allowed();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 405);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_method_not_allowed_response_405_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_method_not_allowed(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 405);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_internal_server_error_response_500_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_internal_server_error();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 500);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_internal_server_error_response_500_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_internal_server_error(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 500);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_not_implemented_response_501_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_not_implemented();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 501);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_not_implemented_response_501_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_not_implemented(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 501);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}

	/** @test */
	function rspns_bad_gateway_response_502_without_data_without_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => [], "message" => "" ];

		$rspns = rspns_bad_gateway();

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 502);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
	/** @test */
	function rspns_bad_gateway_response_502_with_data_with_message()
	{
		$arrayAssertion = [ "status" => "error", "data" => self::MOCK_DATA, "message" => self::ERROR_MSG ];

		$rspns = rspns_bad_gateway(self::MOCK_DATA, self::ERROR_MSG);

		$this->assertInstanceOf(Response::class, $rspns);
		$this->assertEquals($rspns->getStatusCode(), 502);
		$this->assertArraySubset($arrayAssertion, json_decode($rspns->getContent(), true));
	}
}