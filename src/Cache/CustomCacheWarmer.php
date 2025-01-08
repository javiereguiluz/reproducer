<?php

namespace App\Cache;

use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

class CustomCacheWarmer implements CacheWarmerInterface
{
    public function warmUp(string $cacheDir, ?string $buildDir = null): array
    {
        echo "\033[30;44m[DEBUG]\033[0m Running my own custom cache warmer\n";

        return [];
    }

    public function isOptional(): bool
    {
        return false;
    }
}
