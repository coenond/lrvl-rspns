<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

if (!function_exists("rspns_ok")) {
	/**
	 * Response OK 200
	 * @param  array  $data 
	 */
	function rspns_ok($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_OK);
	}
}	

if (!function_exists("rspns_created")) {
	/**
	 * Response CREATED 201
	 * @param  array  $data 
	 */
	function rspns_created($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_CREATED);
	}
}	

if (!function_exists("rspns_accepted")) {
	/**
	 * Response ACCEPTED 202
	 * @param  array  $data 
	 */
	function rspns_accepted($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_ACCEPTED);
	}
}	

if (!function_exists("rspns_noContent")) {
	/**
	 * Response NO_CONTENT 204
	 * @param  array  $data 
	 */
	function rspns_noContent($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_NO_CONTENT);
	}
}	

if (!function_exists("rspns_badRequest")) {
	/**
	 * Response BAD_REQUEST 400
	 * @param  array  $data 
	 */
	function rspns_badRequest($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_BAD_REQUEST);
	}
}	

if (!function_exists("rspns_unauthorized")) {
	/**
	 * Response UNAUTHORIZED 401
	 * @param  array  $data 
	 */
	function rspns_unauthorized($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_UNAUTHORIZED);
	}
}	

if (!function_exists("rspns_notFound")) {
	/**
	 * Response NOT_FOUND 404
	 * @param  array  $data 
	 */
	function rspns_notFound($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_NOT_FOUND);
	}
}	

if (!function_exists("rspns_methodNotAllowed")) {
	/**
	 * Response METHOD_NOT_ALLOWED 405
	 * @param  array  $data 
	 */
	function rspns_methodNotAllowed($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($response, Response::HTTP_METHOD_NOT_ALLOWED);
	}
}