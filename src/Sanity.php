<?php

namespace Eastslopestudio\LaravelSanity;

use Sanity\Client;
use Sanity\BlockContent;

class Sanity {

    /**
     * Configuration
     * 
     * @var array
     */
    protected $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Instantiae a new client
     * 
     * @link https://github.com/sanity-io/sanity-php#instantiating-a-new-client
     * 
     * @return Sanity\Client
     */
    public function client()
    {
        return new Client($this->config);
    }

    /**
     * Render block content from array structure to HTML
     * 
     * @link https://github.com/sanity-io/sanity-php#rendering-block-content
     * 
     * @param string $field
     * @return string
     */
    public function html($field, $config = null)
    {
        if (is_null($config)) {
            $config = [
                'projectId' => $this->config['projectId'],
                'dataset' => $this->config['dataset'],
            ];
        }
        return BlockContent::toHtml($field, $config);
    }

}