<?php
/**
 * ManifestApi
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail Pro Shipping V2 REST API
 *
 * This API specification details the requirements for integrating with Royal Mail Pro Shipping V2 REST API. It specifically covers how the Royal Mail Pro Shipping API can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail Pro Shipping API exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail. Built on industry standards, Royal Mail Pro Shipping V2 API provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly.  There are no costs to customers for using the Royal Mail Pro Shipping V2 API services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\Client\RoyalMail\Shipping\Rest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RoyalMail\Shipping\Rest\Api\Client\ApiException;
use RoyalMail\Shipping\Rest\Api\Client\Configuration;
use RoyalMail\Shipping\Rest\Api\Client\HeaderSelector;
use RoyalMail\Shipping\Rest\Api\Client\ObjectSerializer;

/**
 * ManifestApi Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManifestApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation manifestPost
     *
     * Create shipping manifest.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  \RoyalMail\Shipping\Rest\Api\Client\models\ManifestRequest $manifestRequest manifestRequest (required)
     *
     * @throws \RoyalMail\Shipping\Rest\Api\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoyalMail\Shipping\Rest\Api\Client\models\ManifestResponse
     */
    public function manifestPost($xRMGAuthToken, $manifestRequest)
    {
        list($response) = $this->manifestPostWithHttpInfo($xRMGAuthToken, $manifestRequest);
        return $response;
    }

    /**
     * Operation manifestPostWithHttpInfo
     *
     * Create shipping manifest.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  \RoyalMail\Shipping\Rest\Api\Client\models\ManifestRequest $manifestRequest (required)
     *
     * @throws \RoyalMail\Shipping\Rest\Api\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoyalMail\Shipping\Rest\Api\Client\models\ManifestResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function manifestPostWithHttpInfo($xRMGAuthToken, $manifestRequest)
    {
        $returnType = '\RoyalMail\Shipping\Rest\Api\Client\models\ManifestResponse';
        $request = $this->manifestPostRequest($xRMGAuthToken, $manifestRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\RoyalMail\Shipping\Rest\Api\Client\models\ManifestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation manifestPostAsync
     *
     * Create shipping manifest.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  \RoyalMail\Shipping\Rest\Api\Client\models\ManifestRequest $manifestRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function manifestPostAsync($xRMGAuthToken, $manifestRequest)
    {
        return $this->manifestPostAsyncWithHttpInfo($xRMGAuthToken, $manifestRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation manifestPostAsyncWithHttpInfo
     *
     * Create shipping manifest.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  \RoyalMail\Shipping\Rest\Api\Client\models\ManifestRequest $manifestRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function manifestPostAsyncWithHttpInfo($xRMGAuthToken, $manifestRequest)
    {
        $returnType = '\RoyalMail\Shipping\Rest\Api\Client\models\ManifestResponse';
        $request = $this->manifestPostRequest($xRMGAuthToken, $manifestRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'manifestPost'
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  \RoyalMail\Shipping\Rest\Api\Client\models\ManifestRequest $manifestRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function manifestPostRequest($xRMGAuthToken, $manifestRequest)
    {
        // verify the required parameter 'xRMGAuthToken' is set
        if ($xRMGAuthToken === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xRMGAuthToken when calling manifestPost'
            );
        }
        // verify the required parameter 'manifestRequest' is set
        if ($manifestRequest === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $manifestRequest when calling manifestPost'
            );
        }

        $resourcePath = '/manifest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xRMGAuthToken !== null) {
            $headerParams['X-RMG-Auth-Token'] = ObjectSerializer::toHeaderValue($xRMGAuthToken);
        }


        // body params
        $_tempBody = null;
        if (isset($manifestRequest)) {
            $_tempBody = $manifestRequest;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-IBM-Client-Id');
        if ($apiKey !== null) {
            $headers['X-IBM-Client-Id'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-IBM-Client-Secret');
        if ($apiKey !== null) {
            $headers['X-IBM-Client-Secret'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation manifestPut
     *
     * Create manifest label.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  string $salesOrderNumber The Sales Order Number, which is available via the GUI the day after the manifest was created. (optional)
     * @param  string $manifestBatchNumber This is the batch number to print and is returned by a prior call to create manifest operation. (optional)
     *
     * @throws \RoyalMail\Shipping\Rest\Api\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoyalMail\Shipping\Rest\Api\Client\models\PrintManifestResponse
     */
    public function manifestPut($xRMGAuthToken, $salesOrderNumber = null, $manifestBatchNumber = null)
    {
        list($response) = $this->manifestPutWithHttpInfo($xRMGAuthToken, $salesOrderNumber, $manifestBatchNumber);
        return $response;
    }

    /**
     * Operation manifestPutWithHttpInfo
     *
     * Create manifest label.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  string $salesOrderNumber The Sales Order Number, which is available via the GUI the day after the manifest was created. (optional)
     * @param  string $manifestBatchNumber This is the batch number to print and is returned by a prior call to create manifest operation. (optional)
     *
     * @throws \RoyalMail\Shipping\Rest\Api\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoyalMail\Shipping\Rest\Api\Client\models\PrintManifestResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function manifestPutWithHttpInfo($xRMGAuthToken, $salesOrderNumber = null, $manifestBatchNumber = null)
    {
        $returnType = '\RoyalMail\Shipping\Rest\Api\Client\models\PrintManifestResponse';
        $request = $this->manifestPutRequest($xRMGAuthToken, $salesOrderNumber, $manifestBatchNumber);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\RoyalMail\Shipping\Rest\Api\Client\models\PrintManifestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\Shipping\Rest\Api\Client\models\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation manifestPutAsync
     *
     * Create manifest label.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  string $salesOrderNumber The Sales Order Number, which is available via the GUI the day after the manifest was created. (optional)
     * @param  string $manifestBatchNumber This is the batch number to print and is returned by a prior call to create manifest operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function manifestPutAsync($xRMGAuthToken, $salesOrderNumber = null, $manifestBatchNumber = null)
    {
        return $this->manifestPutAsyncWithHttpInfo($xRMGAuthToken, $salesOrderNumber, $manifestBatchNumber)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation manifestPutAsyncWithHttpInfo
     *
     * Create manifest label.
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  string $salesOrderNumber The Sales Order Number, which is available via the GUI the day after the manifest was created. (optional)
     * @param  string $manifestBatchNumber This is the batch number to print and is returned by a prior call to create manifest operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function manifestPutAsyncWithHttpInfo($xRMGAuthToken, $salesOrderNumber = null, $manifestBatchNumber = null)
    {
        $returnType = '\RoyalMail\Shipping\Rest\Api\Client\models\PrintManifestResponse';
        $request = $this->manifestPutRequest($xRMGAuthToken, $salesOrderNumber, $manifestBatchNumber);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'manifestPut'
     *
     * @param  string $xRMGAuthToken Authorisation token (required)
     * @param  string $salesOrderNumber The Sales Order Number, which is available via the GUI the day after the manifest was created. (optional)
     * @param  string $manifestBatchNumber This is the batch number to print and is returned by a prior call to create manifest operation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function manifestPutRequest($xRMGAuthToken, $salesOrderNumber = null, $manifestBatchNumber = null)
    {
        // verify the required parameter 'xRMGAuthToken' is set
        if ($xRMGAuthToken === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xRMGAuthToken when calling manifestPut'
            );
        }

        $resourcePath = '/manifest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($salesOrderNumber !== null) {
            $queryParams['salesOrderNumber'] = ObjectSerializer::toQueryValue($salesOrderNumber);
        }
        // query params
        if ($manifestBatchNumber !== null) {
            $queryParams['manifestBatchNumber'] = ObjectSerializer::toQueryValue($manifestBatchNumber);
        }
        // header params
        if ($xRMGAuthToken !== null) {
            $headerParams['X-RMG-Auth-Token'] = ObjectSerializer::toHeaderValue($xRMGAuthToken);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-IBM-Client-Id');
        if ($apiKey !== null) {
            $headers['X-IBM-Client-Id'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-IBM-Client-Secret');
        if ($apiKey !== null) {
            $headers['X-IBM-Client-Secret'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
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
