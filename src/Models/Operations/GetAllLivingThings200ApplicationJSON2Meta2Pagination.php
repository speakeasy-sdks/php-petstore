<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Operations;


class GetAllLivingThings200ApplicationJSON2Meta2Pagination
{
	#[\JMS\Serializer\Annotation\SerializedName('pageNumber')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $pageNumber = null;
    
	public function __construct()
	{
		$this->pageNumber = null;
	}
}