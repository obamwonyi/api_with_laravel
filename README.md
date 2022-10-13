## Pre-Production Readme 

### HTTP Request Method To Handle 
----------------------------
#### 200 Request 
* __code 200 (ok)__
* __code 201 (created)__
* __code 204 (no content)__
#### 300 Request
* __code 301 (moved permanently)__
* __code 301 (moved permanently)__
* __code 307 (temperal redirect)__ 
* __code 308 (permanent redirect)__
#### 400 Request
* __code 400 (bad request)__
* __code 401 (unauthorized)__
* __code 403 (Forbidden)__
* __code 404 (not,found)__
* __code 405 (method not allowed)__
* __code 422 (unprocessable entity)__ 
#### 500 Request 
* __code 500 (Internal Server error)__
* __code 501 (not inplemented)__ 
* __code 502 (bad request)__ 
* __code 503 (service unavailable)__
* __code 504 (gateway timeout)__ 

### Programming convention to follow in this project 
----
* __Variables = camelCase__
* __Methods = camelCase__
* __Functions = camelCase__
* __JSON Attributes = snake_case__


### Creating a user
we can create a user form post man with 
by sending a request with a body to the 
url of the __root project (be it localhost)/oauth/token__

## __Body__:
__grant_type : password__

__client_id : token id (client id).__

__client_secret : token generated.__

__username : email of the user created.__

__password : password of the user created__



