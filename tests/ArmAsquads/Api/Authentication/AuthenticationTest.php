<?php
require_once('/../AbstractApiTest.php');

class AuthenticationTest extends AbstractApiTest
{
    public function testGetAndSetAuthentication()
    {
        $api = $this->getApi(null);
        $api->setAuthentication(new \ArmAsquads\Api\Authentication\HttpHeader('testToken'));

        $this->assertInstanceOf('ArmAsquads\Api\Authentication\AuthenticationInterface', $api->getAuthentication());
    }

    public function testHttpHeaderAuthentication()
    {
        $auth = new \ArmAsquads\Api\Authentication\HttpHeader('testToken');
        $this->assertEquals('X-API-KEY: testToken', $auth->getCredential());
    }

}