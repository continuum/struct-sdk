<?php

class Auth implements IAuth {
    public $http;
    function __construct($http = new Http()) {}

    public function getToken() {
        $this->$http->post();
    }
}


// TEST

//Example of test

// class HttpMock {
//     $this->$http->post() {json}
// }

// $auth = new Auth(new HttpMock())
// $auth.getToken()

// expect(...)

