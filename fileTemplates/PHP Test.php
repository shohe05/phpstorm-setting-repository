<?php

use Mockery as m;
use Way\Tests\Should;

class ${NAME} extends TestCase
{
    public function setup()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
        m::close();
    }
}
