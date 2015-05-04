<?php
namespace Kemer\UPnP\DeviceDescription\ServiceList;

class ServiceList implements \IteratorAggregate
{
    protected $services = [];

    public function __construct(array $services = [])
    {
        foreach ($services as $service) {
            $this->add(new Service($service));
        }
    }

    public function add(Service $service)
    {
        $this->services[] = $service;
    }

    public function get($type)
    {
        $service = array_filter($this->services, function($service) use ($type) {
            return $service->getServiceType() == $type;
        });
        if (!empty($service)) {
            return reset($service);
        }
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->services);
    }
}

?>
