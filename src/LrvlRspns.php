<?php

namespace coenond\LrvlRspns;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class LrvlRspnss
{
	/**
	 * @param $data  		Array 	| optional, Resource(s) to return
	 * @param $statusCode 	int 	| optional, 200 default
	 */
	function rspnsSuccess($data = [], $statusCode = 200): JsonResponse
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
	function rspnsError($errorMsg = "Oops, something went wrong!", $statusCode = 500): JsonResponse
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
	function rspnsFail($data = [], $statusCode = 400): JsonResponse
	{
		$response = [
			"status" => "fail",
			"data" => $data
		];

		return response()->json($data, $statusCode);
	}

	/**
	 * Response OK 200
	 * @param  array  $data 
	 */
	function ok($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_OK);
	}

	/**
	 * Response CREATED 201
	 * @param  array  $data 
	 */
	function created($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_CREATED);
	}

	/**
	 * Response ACCEPTED 202
	 * @param  array  $data 
	 */
	function accepted($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_ACCEPTED);
	}

	/**
	 * Response NO_CONTENT 204
	 * @param  array  $data 
	 */
	function noContent($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_NO_CONTENT);
	}

	/**
	 * Response BAD_REQUEST 400
	 * @param  array  $data 
	 */
	function badRequest($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_BAD_REQUEST);
	}

	/**
	 * Response UNAUTHORIZED 401
	 * @param  array  $data 
	 */
	function unauthorized($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_UNAUTHORIZED);
	}
}