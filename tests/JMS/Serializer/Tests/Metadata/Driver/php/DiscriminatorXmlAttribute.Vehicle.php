<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata('JMS\Serializer\Tests\Fixtures\DiscriminatorXmlAttribute\Vehicle');
$metadata->setDiscriminator('type', array(
    'car' => 'JMS\Serializer\Tests\Fixtures\DiscriminatorXmlAttribute\Car',
    'moped' => 'JMS\Serializer\Tests\Fixtures\DiscriminatorXmlAttribute\Moped',
), true);

$km = new PropertyMetadata('JMS\Serializer\Tests\Fixtures\DiscriminatorXmlAttribute\Vehicle', 'km');
$km->setType('integer');
$metadata->addPropertyMetadata($km);

return $metadata;
