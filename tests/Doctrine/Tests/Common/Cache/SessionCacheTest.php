<?php

namespace Doctrine\Tests\Common\Cache;

use Doctrine\Common\Cache\SessionCache;
use Doctrine\Tests\Common\Cache\ArrayCacheTest;

/**
 * @requires extension sqlite3
 */
class SessionCacheTest extends ArrayCacheTest
{
    /**
     * {@inheritDoc}
     */
    protected function _getCacheDriver()
    {
        return new SessionCache();
    }
}
