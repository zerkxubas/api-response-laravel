<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Zerkxubas\ApiResponseLaravel\StatusCode;


final class StatusCodesTest extends TestCase
{

    /**
     * 200 OK Test
     */
    #[Test]
    public function it_generates_status_code_ok()
    {
        $this->assertEquals(200, StatusCode::OK);
    }

    /**
     * 201 CREATED Test
     */
    #[Test]
    public function it_generates_status_code_created()
    {
        $this->assertEquals(201, StatusCode::CREATED);
    }

    /**
     * 202 ACCEPTED Test
     */
    #[Test]
    public function it_generates_status_code_accepted()
    {
        $this->assertEquals(202, StatusCode::ACCEPTED);
    }

    /**
     * 400 BAD REQUEST Test
     */
    #[Test]
    public function it_generates_status_code_bad_request()
    {
        $this->assertEquals(400, StatusCode::BAD_REQUEST);
    }

    /**
     * 401 UNAUTHORIZED Test
     */
    #[Test]
    public function it_generates_status_code_unauthorized()
    {
        $this->assertEquals(401, StatusCode::UNAUTHORIZED);
    }

    /**
     * 403 FORBIDDEN Test
     */
    #[Test]
    public function it_generates_status_code_forbidden()
    {
        $this->assertEquals(403, StatusCode::FORBIDDEN);
    }

    /**
     * 404 NOT FOUND Test
     */
    #[Test]
    public function it_generates_status_code_not_found()
    {
        $this->assertEquals(404, StatusCode::NOT_FOUND);
    }

    /**
     * 500 SERVER ERROR Test
     */
    #[Test]
    public function it_generates_status_code_server_error()
    {
        $this->assertEquals(500, StatusCode::SERVER_ERROR);
    }
}
