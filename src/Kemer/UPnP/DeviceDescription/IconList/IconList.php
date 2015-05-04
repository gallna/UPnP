<?php
namespace Kemer\UPnP\DeviceDescription;

class IconList extends \ArrayObject
{
    protected $services = [];

    public function __construct(array $icon = [])
    {
        foreach ($icon as $icon) {
            $this->add($icon);
        }
    }

    public function add(IconInterface $service)
    {
        $this->services[] = $service;
    }

    public function get($type)
    {
        return array_filter($this->services, function($service) use ($type) {
            $service->getServiceType() == $type;
        });
    }
}

?>
