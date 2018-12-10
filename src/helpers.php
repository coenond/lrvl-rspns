<?php

if (!function_exists("ok")) {
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
}	

if (!function_exists("created")) {
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
}	

if (!function_exists("accepted")) {
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
}	

if (!function_exists("noContent")) {
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
}	

if (!function_exists("badRequest")) {
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
}	

if (!function_exists("unauthorized")) {
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

if (!function_exists("notFound")) {
	/**
	 * Response NOT_FOUND 404
	 * @param  array  $data 
	 */
	function notFound($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_NOT_FOUND);
	}
}	

if (!function_exists("methodNotAllowed")) {
	/**
	 * Response METHOD_NOT_ALLOWED 405
	 * @param  array  $data 
	 */
	function methodNotAllowed($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_METHOD_NOT_ALLOWED);
	}
}