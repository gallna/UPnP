<?php
namespace Kemer\UPnP\DeviceDescription\ServiceList;

class Service implements ServiceInterface
{
    /**
     * UPnP service type
     * @var string
     */
    private $serviceType;

    /**
     * Service identifier
     * @var string
     */
    private $serviceId;

    /**
     * URL for service description
     * @var string
     */
    private $sCPDURL;

    /**
     * URL for control
     * @var string
     */
    private $controlURL;

    /**
     * URL for eventing
     * @var string
     */
    private $eventSubURL;

    public function __construct(array $spec = [])
    {
        $this->serviceType = isset($spec["serviceType"]) ? $spec["serviceType"] : null;
        $this->serviceId = isset($spec["serviceId"]) ? $spec["serviceId"] : null;
        $this->sCPDURL = isset($spec["SCPDURL"]) ? $spec["SCPDURL"] : null;
        $this->controlURL = isset($spec["controlURL"]) ? $spec["controlURL"] : null;
        $this->eventSubURL = isset($spec["eventSubURL"]) ? $spec["eventSubURL"] : null;
    }

    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    public function getServiceType()
    {
        return $this->serviceType;
    }

    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    public function setSCPDURL($sCPDURL)
    {
        $this->sCPDURL = $sCPDURL;
        return $this;
    }

    public function getSCPDURL()
    {
        return $this->sCPDURL;
    }

    public function setControlURL($controlURL)
    {
        $this->controlURL = $controlURL;
        return $this;
    }

    public function getControlURL()
    {
        return $this->controlURL;
    }

    public function setEventSubURL($eventSubURL)
    {
        $this->eventSubURL = $eventSubURL;
        return $this;
    }

    public function getEventSubURL()
    {
        return $this->eventSubURL;
    }


}

?>
