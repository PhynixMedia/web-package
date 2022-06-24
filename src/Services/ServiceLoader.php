<?php

namespace Web\App\Services;

use Web\App\Services\ServiceFactory;

class ServiceLoader {

    protected $servicesFactory;

    public function __construct(ServiceFactory $servicesFactory)
    {
        $this->servicesFactory = $servicesFactory;
    }

    /**
     * @return ServiceFactory
     */
    public function build(): ServiceFactory
    {

        return $this->servicesFactory;
    }

    /**
     * @param string $key
     * @return ServiceFactory[]|false|mixed|string[]
     */
    public function load(string $key)
    {
        return $this->servicesFactory->create($key);
    }
}
