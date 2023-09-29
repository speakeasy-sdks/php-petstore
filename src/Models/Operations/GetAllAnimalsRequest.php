<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Operations;

use \php\petstore\Utils\SpeakeasyMetadata;
class GetAllAnimalsRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=age')]
    public ?string $age = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=color')]
    public ?string $color = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=id')]
    public ?string $id = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->age = null;
		$this->color = null;
		$this->id = null;
		$this->name = null;
	}
}