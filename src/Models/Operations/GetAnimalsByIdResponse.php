<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Operations;


class GetAnimalsByIdResponse
{
    /**
     * OK
     * 
     * @var ?\php\petstore\Models\Shared\Animals $animals
     */
	
    public ?\php\petstore\Models\Shared\Animals $animals = null;
    
	
    public string $contentType;
    
    /**
     * Internal Server Error
     * 
     * @var ?\php\petstore\Models\Shared\Error $error
     */
	
    public ?\php\petstore\Models\Shared\Error $error = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->animals = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
