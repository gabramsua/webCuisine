<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'intranetBundle\Repository\\UserRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'login',
   'fieldName' => 'login',
   'type' => 'string',
   'length' => '9',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'nameU',
   'fieldName' => 'nameU',
   'type' => 'string',
   'length' => '30',
  ));
$metadata->mapField(array(
   'columnName' => 'surnameU',
   'fieldName' => 'surnameU',
   'type' => 'string',
   'length' => '30',
  ));
$metadata->mapField(array(
   'columnName' => 'lang',
   'fieldName' => 'lang',
   'type' => 'string',
   'length' => '15',
  ));
$metadata->mapField(array(
   'columnName' => 'rol',
   'fieldName' => 'rol',
   'type' => 'string',
   'length' => '15',
  ));
$metadata->mapField(array(
   'columnName' => 'photo',
   'fieldName' => 'photo',
   'type' => 'string',
   'length' => '15',
  ));
$metadata->mapField(array(
   'columnName' => 'onboard',
   'fieldName' => 'onboard',
   'type' => 'boolean',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);