<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GeneralResource extends JsonResponse
{
    public $status;
    public $message;
    public $code;
    /**
     * __construct
     *
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($code, $message, $resource)
    {
        parent::__construct($resource);
        $this->code = $code;
        $this->message = $message;
        if($this->code === 0) $code = 400;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status'    => 'success',
            'message'   => $this->message,
            'data'      => $this->resource,
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function toResponse($request)
    {
        return parent::toResponse($request)->setStatusCode($this->code);
    }


}
