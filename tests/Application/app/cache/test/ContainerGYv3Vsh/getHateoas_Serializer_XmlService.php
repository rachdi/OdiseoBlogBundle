<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.serializer.xml' shared service.

$this->privates['hateoas.serializer.xml'] = $instance = new \Hateoas\Serializer\XmlSerializer();

$instance->setMetadataFactory(($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php')));

return $instance;