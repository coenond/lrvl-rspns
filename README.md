# LRVL.RSPNS.
[![Version](https://poser.pugx.org/coenond/lrvl-rspns/v/stable)](https://packagist.org/packages/coenond/lrvl-rspns) [![Total Downloads](https://poser.pugx.org/coenond/lrvl-rspns/downloads)](https://packagist.org/packages/coenond/lrvl-rspns)

A simple helper package for Laravel that helps you standardize your HTTP responses. 

The helper includes multiple functions that returns a Json Response. Each function is already defined with the correct HTTP Status code.

Simply add this package to your Laravel project by running `composer require coenond/lrvl-rspns`

## Example Usage
The helper methodes can be used in controllers. For example in the User controller:

``` php
/**
 * get user by id.
 */
public function get($id)
{
    try {
        $user = User::findOrFail($id);
        return rspns_ok($user);
    } catch(ModelNotFoundException $e) {
        return rspns_not_found($id, $e->getMessage());
    }
}

/**
 * Do not create users like this in your system :)
 */
public function create(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    if (User::whereEmail($email)->exists()) {
        return rspns_bad_request($request->all(), "User already exists");
    }
    
    $user = User::create(['email'	=> $email, 'password' => $password]);

    return rspns_created($user);
}
```

## List of All helpers
* `rspns_ok()` 
    - Param `$data` is optional
    - Returns status code `200`
    
* `rspns_created()` 
    - Param `$data` is optional
    - Returns status code `201`

* `rspns_accepted()` 
    - Param `$data` is optional
    - Returns status code `202`

* `rspns_no_content()` 
    - Param `$data` is optional
    - Returns status code `204`

* `rspns_bad_request()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `400`

* `rspns_unauthorized()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `401`

* `rspns_not_found()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `404`

* `rspns_method_not_allowed()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `405`

* `rspns_internal_server_error()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `500`

* `rspns_not_implemented()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `501`

* `rspns_bad_gateway()` 
    - Param `$data` is optional
    - Param `$message` is optional
    - Returns status code `502`

### Success Responses
The `2xx` (success) responses are defined with the status `success` and has an optional data object. 

### Error Responses
The `4xx` and `5xx` responses are defined with the status `success` and has an optional data object and message parameter.

NOTE: Unfortunately, PHP doesn't support named parameters, so if you want to return an error message *without data* is should be return like: `return rspns_bad_request(null, 'some messsage here');`