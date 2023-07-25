<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Shared;


class NestedBirdLocationGeography
{
	#[\JMS\Serializer\Annotation\SerializedName('latitude')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $latitude = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('longitutde')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $longitutde = null;
    
	public function __construct()
	{
		$this->latitude = null;
		$this->longitutde = null;
	}
}
