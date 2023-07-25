<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Operations;


class GetAllLivingThings200ApplicationJSON2
{
    /**
     * $animals
     * 
     * @var ?array<\php\petstore\Models\Shared\Animals> $animals
     */
	#[\JMS\Serializer\Annotation\SerializedName('animals')]
    #[\JMS\Serializer\Annotation\Type('array<php\petstore\Models\Shared\Animals>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $animals = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $meta = null;
    
	public function __construct()
	{
		$this->animals = null;
		$this->meta = null;
	}
}
