<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Operations;


/**
 * CreateNewBird200ApplicationJSON - OK
 * 
 * @package php\petstore\Models\Operations
 * @access public
 */
class CreateNewBird200ApplicationJSON
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('php\petstore\Models\Shared\NestedBird')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\php\petstore\Models\Shared\NestedBird $data = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('php\petstore\Models\Operations\CreateNewBird200ApplicationJSONMeta')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateNewBird200ApplicationJSONMeta $meta = null;
    
	public function __construct()
	{
		$this->data = null;
		$this->meta = null;
	}
}