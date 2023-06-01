<?php
/**
 * AuthenticationRefreshTokenCredentialsTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * authService/authenticationService.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Alfaview;

use PHPUnit\Framework\TestCase;


/**
 * AuthenticationRefreshTokenCredentialsTest Class Doc Comment
 *
 * @category    Class
 * @description * RefreshTokenCredentials are used to exchange a refresh token for a new access token. Refresh tokens usually have a validity of 30 days. They are safe to pass to 3rd party applications integrating with us if, and only if, they are created with a limited set of permissions when originally authenticating. The access token must be passed and using a refresh token will then return an access token with at most those permissions originally granted. If permissions were revoked for that user in the meantime, these will not be included in the new access token as well.
 * @package     Alfaview
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationRefreshTokenCredentialsTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "AuthenticationRefreshTokenCredentials"
     */
    public function testAuthenticationRefreshTokenCredentials()
    {
    }

    /**
     * Test attribute "principal"
     */
    public function testPropertyPrincipal()
    {
    }

    /**
     * Test attribute "refresh_token"
     */
    public function testPropertyRefreshToken()
    {
    }

    /**
     * Test attribute "company_id"
     */
    public function testPropertyCompanyId()
    {
    }

    /**
     * Test attribute "access_token"
     */
    public function testPropertyAccessToken()
    {
    }
}
