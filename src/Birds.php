<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore;

class Birds 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * create a living thing
     * 
     * Create a living thing
     * 
     * @param \php\petstore\Models\Shared\ComplexObject $request
     * @return \php\petstore\Models\Operations\CreateLivingThingsResponse
     */
	public function createLivingThings(
        ?\php\petstore\Models\Shared\ComplexObject $request,
    ): \php\petstore\Models\Operations\CreateLivingThingsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/living-things');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \php\petstore\Models\Operations\CreateLivingThingsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->complexObject = $serializer->deserialize((string)$httpResponse->getBody(), 'php\petstore\Models\Shared\ComplexObject', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'php\petstore\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create new Bird
     * 
     * Create a new Bird
     * 
     * @param \php\petstore\Models\Shared\NestedBird $request
     * @return \php\petstore\Models\Operations\CreateNewBirdResponse
     */
	public function createNewBird(
        ?\php\petstore\Models\Shared\NestedBird $request,
    ): \php\petstore\Models\Operations\CreateNewBirdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/birds');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \php\petstore\Models\Operations\CreateNewBirdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createNewBird200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'php\petstore\Models\Operations\CreateNewBird200ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get Birds
     * 
     * Get All birds
     * 
     * @param array<\php\petstore\Models\Shared\Birds> $request
     * @return \php\petstore\Models\Operations\GetAllBirdsResponse
     */
	public function getAllBirds(
        ?array $request,
    ): \php\petstore\Models\Operations\GetAllBirdsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/birds');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \php\petstore\Models\Operations\GetAllBirdsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->birds = $serializer->deserialize((string)$httpResponse->getBody(), 'array<php\petstore\Models\Shared\Birds>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'php\petstore\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get All living things
     * 
     * get All living things data
     * 
     * @param \php\petstore\Models\Operations\GetAllLivingThingsRequest $request
     * @return \php\petstore\Models\Operations\GetAllLivingThingsResponse
     */
	public function getAllLivingThings(
        ?\php\petstore\Models\Operations\GetAllLivingThingsRequest $request,
    ): \php\petstore\Models\Operations\GetAllLivingThingsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/living-things');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\php\petstore\Models\Operations\GetAllLivingThingsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \php\petstore\Models\Operations\GetAllLivingThingsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAllLivingThings200ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
}