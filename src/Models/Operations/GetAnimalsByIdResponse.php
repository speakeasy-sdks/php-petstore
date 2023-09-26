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
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Internal Server Error
     * 
     * @var ?\php\petstore\Models\Shared\Error $error
     */
	
    public ?\php\petstore\Models\Shared\Error $error = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
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
