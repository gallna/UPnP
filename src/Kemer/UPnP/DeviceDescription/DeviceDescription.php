<?php
namespace Kemer\UPnP\DeviceDescription;

class DeviceDescription implements DeviceDescriptionInterface
{
    protected $deviceType = "urn:schemas-upnp-org:device:MediaServer:1";
    protected $friendlyName = "Chujas";
    protected $manufacturer = "";
    protected $modelName = "Windows Media Connect compatible (Node upnpserver)";
    protected $UDN = "uuid:71205cf6-b918-41ff-a24e-802d73c0f187";
    protected $serviceList;

    public function __construct(array $description = [])
    {
        if (!empty($description)) {
            $this->fromArray($description);
        }
    }

    public function fromArray(array $description)
    {
        $this->UDN = isset($description["UDN"]) ? $description["UDN"] : null;
        $this->friendlyName = isset($description["friendlyName"]) ? $description["friendlyName"] : null;
        $this->deviceType = isset($description["deviceType"]) ? $description["deviceType"] : null;
        $this->manufacturer = isset($description["manufacturer"]) ? $description["manufacturer"] : null;
        $this->modelName = isset($description["modelName"]) ? $description["modelName"] : null;
        //$this->iconList = isset($description["iconList"]) ? $description["iconList"] : null;
        if (isset($description["serviceList"]["service"])) {
            $this->serviceList = new ServiceList\ServiceList($description["serviceList"]["service"]);
        }
    }

    public function setIconList(IconList $iconList)
    {
        $this->iconList = $iconList;
        return $this;
    }

    public function getIconList()
    {
        return $this->iconList;
    }

    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    public function getDeviceType()
    {
        return $this->deviceType;
    }

    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
        return $this;
    }

    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    public function getModelName()
    {
        return $this->modelName;
    }

    public function setUDN($UDN)
    {
        $this->UDN = $UDN;
        return $this;
    }

    public function getUDN()
    {
        return $this->UDN;
    }


    public function setServiceList(ServiceList $serviceList)
    {
        $this->serviceList = $serviceList;
        return $this;
    }

    public function getServiceList()
    {
        return $this->serviceList;
    }
}

?>
