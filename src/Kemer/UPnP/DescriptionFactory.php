<?php
namespace Kemer\UPnP;

use Kemer\SSDP\Response\DiscoveryResponse;


class DescriptionFactory
{
    public function __construct()
    {

    }

    public function createDeviceDescription(DiscoveryResponse $discovery)
    {
        $xml = $this->getDescription($discovery->getLocation());
        $url = parse_url($discovery->getLocation());
        $url = $url['scheme'].'://'.$url['host'].':'.$url['port'];
        $description = (array)json_decode(json_encode(simplexml_load_string($xml)), true);
        $deviceDescription = new DeviceDescription\DeviceDescription($description["device"]);
        foreach ($deviceDescription->getServiceList() as $service) {
            $service->setControlURL($url.$service->getControlURL());
        }
        return $deviceDescription;
    }

    public function createServiceDescription(Device\DeviceDescriptionInterface $spec)
    {
        $description = $this->getDescription($spec->getLocation());
        list ($contentDirectory, $renderingControl, $connectionManager, $avTransport) =
            $this->getServiceDescription($description->device->serviceList->service);
        return new MediaRenderer($renderingControl, $connectionManager, $avTransport);
    }

    public function getDescription($location)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $location);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }

    protected function getServiceDescription($location, \SimpleXmlElement $services)
    {
        $url = parse_url($location);
        $url = $url['scheme'].'://'.$url['host'].':'.$url['port'];
        $response = [
            "contentDirectory" => "",
            "renderingControl" => "",
            "connectionManager" => "",
            "avTransport" => "",
        ];
        foreach ($services as $service) {
            $service = json_decode(json_encode($service));
            $service->controlURL = $url.$service->controlURL;
            switch ((string)$service->serviceType) {
                case Client::CONTENT_DIRECTORY:
                    $response["contentDirectory"] = $service;
                    break;
                case Client::RENDERING_CONTROL:
                    $response["renderingControl"] = $service;
                    break;
                case Client::CONNECTION_MANAGER:
                    $response["connectionManager"] = $service;
                    break;
                case Client::AV_TRANSPORT:
                    $response["avTransport"] = $service;
                    break;
            }
        }
        return $response;
    }
}
