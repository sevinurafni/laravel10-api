<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource // class PostResource turunan dari class JsonResources
{ 
    //define properti
    public $status;
    public $message;
    public $resource; //menyimpan data yang akan dikirmkan dalam respon API
    
    /**
     * __construct
     *
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) //dipanggil jika objek POstResource diubah menjadi array
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}