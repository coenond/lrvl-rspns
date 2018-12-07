<?php

namespace coenond\LrvlRspns;

use Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response;

class LrvlRspns
{
	/**
	 * @param $data  		Array 	| optional, Resource(s) to return
	 * @param $statusCode 	int 	| optional, 200 default
	 */
	function rspnsSuccess($data = [], $statusCode = 200): Response
	{
		$response = [
			"status" => "success",
			"data" => $data ?: []
		];
		
		return response()->json($response, $statusCode);
	}

	/**
	 * @param $errorMsg 	String 	| optional
	 * @param $statusCode 	int 	| optional, 500 default
	 */
	function rspnsError($errorMsg = "Oops, something went wrong!", $statusCode = 500): Response
	{
		$response = [
			"status" => "error",
			"message" => $errorMsg
		];

		return response()->json($response, $statusCode);
	}

	/**
	 * @param $data  		Array 	| Error messages to return
	 * @param $statusCode 	int 	| optional, 400 default
	 */
	function rspnsFail($data = [], $statusCode = 400): Response
	{
		$response = [
			"status" => "fail",
			"data" => $data
		];

		return response()->json($data, $statusCode);
	}
}