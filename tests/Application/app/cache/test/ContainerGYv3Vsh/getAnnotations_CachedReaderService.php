<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotations.cached_reader' shared service.

return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->load('getAnnotations_ReaderService.php')), ($this->privates['annotations.cache'] ?? $this->load('getAnnotations_CacheService.php')), true);