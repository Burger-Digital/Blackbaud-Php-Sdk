<?php
/**
 * ConstituentMembershipApi
 * PHP version 7.2
 *
 * @category Class
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Constituent
 *
 * This API manages constituent information and related entities such as addresses, phones, emails, and notes.
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BurgerDigital\BlackbaudPhpSdk\Api;

use BurgerDigital\BlackbaudPhpSdk\ApiException;
use BurgerDigital\BlackbaudPhpSdk\Configuration;
use BurgerDigital\BlackbaudPhpSdk\HeaderSelector;
use BurgerDigital\BlackbaudPhpSdk\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

/**
 * ConstituentMembershipApi Class Doc Comment
 *
 * @category Class
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConstituentMembershipApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listConstituentMembershipsSingleConstituent
     *
     * Membership list (Single constituent)
     *
     * @param  string $constituent_id The immutable system record ID of the constituent to retrieve the memberships for. (required)
     *
     * @throws \BurgerDigital\BlackbaudPhpSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead
     */
    public function listConstituentMembershipsSingleConstituent($constituent_id)
    {
        list($response) = $this->listConstituentMembershipsSingleConstituentWithHttpInfo($constituent_id);
        return $response;
    }

    /**
     * Operation listConstituentMembershipsSingleConstituentWithHttpInfo
     *
     * Membership list (Single constituent)
     *
     * @param  string $constituent_id The immutable system record ID of the constituent to retrieve the memberships for. (required)
     *
     * @throws \BurgerDigital\BlackbaudPhpSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function listConstituentMembershipsSingleConstituentWithHttpInfo($constituent_id)
    {
        $request = $this->listConstituentMembershipsSingleConstituentRequest($constituent_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listConstituentMembershipsSingleConstituentAsync
     *
     * Membership list (Single constituent)
     *
     * @param  string $constituent_id The immutable system record ID of the constituent to retrieve the memberships for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listConstituentMembershipsSingleConstituentAsync($constituent_id)
    {
        return $this->listConstituentMembershipsSingleConstituentAsyncWithHttpInfo($constituent_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listConstituentMembershipsSingleConstituentAsyncWithHttpInfo
     *
     * Membership list (Single constituent)
     *
     * @param  string $constituent_id The immutable system record ID of the constituent to retrieve the memberships for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listConstituentMembershipsSingleConstituentAsyncWithHttpInfo($constituent_id)
    {
        $returnType = '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead';
        $request = $this->listConstituentMembershipsSingleConstituentRequest($constituent_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listConstituentMembershipsSingleConstituent'
     *
     * @param  string $constituent_id The immutable system record ID of the constituent to retrieve the memberships for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listConstituentMembershipsSingleConstituentRequest($constituent_id)
    {
        // verify the required parameter 'constituent_id' is set
        if ($constituent_id === null || (is_array($constituent_id) && count($constituent_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $constituent_id when calling listConstituentMembershipsSingleConstituent'
            );
        }

        $resourcePath = '/constituents/{constituent_id}/memberships';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($constituent_id !== null) {
            $resourcePath = str_replace(
                '{' . 'constituent_id' . '}',
                ObjectSerializer::toPathValue($constituent_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Bb-Api-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Bb-Api-Subscription-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listMemberships
     *
     * Membership list (All constituents)
     *
     * @param  string $date_added Format - date-time (as date-time in RFC3339). Represents a filter for memberships created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $last_modified Format - date-time (as date-time in RFC3339). Represents a filter for memberships modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $sort_token Represents a token filter to provide the next stable-sorted list of memberships. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. (optional)
     * @param  int $limit Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. (optional)
     * @param  int $offset Format - int32. Represents the number of records to skip. For use with pagination. (optional)
     *
     * @throws \BurgerDigital\BlackbaudPhpSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead
     */
    public function listMemberships($date_added = null, $last_modified = null, $sort_token = null, $limit = null, $offset = null)
    {
        list($response) = $this->listMembershipsWithHttpInfo($date_added, $last_modified, $sort_token, $limit, $offset);
        return $response;
    }

    /**
     * Operation listMembershipsWithHttpInfo
     *
     * Membership list (All constituents)
     *
     * @param  string $date_added Format - date-time (as date-time in RFC3339). Represents a filter for memberships created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $last_modified Format - date-time (as date-time in RFC3339). Represents a filter for memberships modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $sort_token Represents a token filter to provide the next stable-sorted list of memberships. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. (optional)
     * @param  int $limit Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. (optional)
     * @param  int $offset Format - int32. Represents the number of records to skip. For use with pagination. (optional)
     *
     * @throws \BurgerDigital\BlackbaudPhpSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function listMembershipsWithHttpInfo($date_added = null, $last_modified = null, $sort_token = null, $limit = null, $offset = null)
    {
        $request = $this->listMembershipsRequest($date_added, $last_modified, $sort_token, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listMembershipsAsync
     *
     * Membership list (All constituents)
     *
     * @param  string $date_added Format - date-time (as date-time in RFC3339). Represents a filter for memberships created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $last_modified Format - date-time (as date-time in RFC3339). Represents a filter for memberships modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $sort_token Represents a token filter to provide the next stable-sorted list of memberships. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. (optional)
     * @param  int $limit Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. (optional)
     * @param  int $offset Format - int32. Represents the number of records to skip. For use with pagination. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listMembershipsAsync($date_added = null, $last_modified = null, $sort_token = null, $limit = null, $offset = null)
    {
        return $this->listMembershipsAsyncWithHttpInfo($date_added, $last_modified, $sort_token, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listMembershipsAsyncWithHttpInfo
     *
     * Membership list (All constituents)
     *
     * @param  string $date_added Format - date-time (as date-time in RFC3339). Represents a filter for memberships created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $last_modified Format - date-time (as date-time in RFC3339). Represents a filter for memberships modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $sort_token Represents a token filter to provide the next stable-sorted list of memberships. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. (optional)
     * @param  int $limit Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. (optional)
     * @param  int $offset Format - int32. Represents the number of records to skip. For use with pagination. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listMembershipsAsyncWithHttpInfo($date_added = null, $last_modified = null, $sort_token = null, $limit = null, $offset = null)
    {
        $returnType = '\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionMembershipRead';
        $request = $this->listMembershipsRequest($date_added, $last_modified, $sort_token, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listMemberships'
     *
     * @param  string $date_added Format - date-time (as date-time in RFC3339). Represents a filter for memberships created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $last_modified Format - date-time (as date-time in RFC3339). Represents a filter for memberships modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. (optional)
     * @param  string $sort_token Represents a token filter to provide the next stable-sorted list of memberships. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. (optional)
     * @param  int $limit Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. (optional)
     * @param  int $offset Format - int32. Represents the number of records to skip. For use with pagination. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listMembershipsRequest($date_added = null, $last_modified = null, $sort_token = null, $limit = null, $offset = null)
    {

        $resourcePath = '/memberships';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($date_added)) {
            $date_added = ObjectSerializer::serializeCollection($date_added, '', true);
        }
        if ($date_added !== null) {
            $queryParams['date_added'] = $date_added;
        }
        // query params
        if (is_array($last_modified)) {
            $last_modified = ObjectSerializer::serializeCollection($last_modified, '', true);
        }
        if ($last_modified !== null) {
            $queryParams['last_modified'] = $last_modified;
        }
        // query params
        if (is_array($sort_token)) {
            $sort_token = ObjectSerializer::serializeCollection($sort_token, '', true);
        }
        if ($sort_token !== null) {
            $queryParams['sort_token'] = $sort_token;
        }
        // query params
        if (is_array($limit)) {
            $limit = ObjectSerializer::serializeCollection($limit, '', true);
        }
        if ($limit !== null) {
            $queryParams['limit'] = $limit;
        }
        // query params
        if (is_array($offset)) {
            $offset = ObjectSerializer::serializeCollection($offset, '', true);
        }
        if ($offset !== null) {
            $queryParams['offset'] = $offset;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Bb-Api-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Bb-Api-Subscription-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
