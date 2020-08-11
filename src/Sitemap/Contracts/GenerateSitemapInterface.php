<?php

namespace Dsimakov\Sitemap\Sitemap\Contracts;

interface GenerateSitemapInterface
{
    public function generate(): array;
}