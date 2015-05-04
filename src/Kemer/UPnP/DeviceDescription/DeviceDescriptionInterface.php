<?php
namespace Kemer\UPnP\DeviceDescription;

interface DeviceDescriptionInterface
{
    /**
     * Specified by UPnP vendor
     * @return IconList
     */
    public function getIconList();

    /**
     * UPnP device type.
     * MUST begin with “urn:schemas-upnp-org:device:” followed by the standardized device type suffix,
     * a colon, and an integer device version i.e. urn:schemas-upnp-org:device:deviceType:ver.
     * The highest supported version of the device type MUST be specified.
     * @return string
     */
    public function getDeviceType();

    /**
     * Short description for end user
     * @return string
     */
    public function getFriendlyName();

    /**
     * Manufacturer's name
     * @return string
     */
    public function getManufacturer();

    /**
     * Model name.
     * @return string
     */
    public function getModelName();

    /**
     * Unique Device Name. Universally-unique identifier for the device, whether root or embedded.
     * Must be the same over time for a specific device instance
     * Must match the value of the27UPC NT header in device discovery messages.
     * Must match the prefix of the USN header in all discovery messages.
     * Must begin with uuid: followed by a UUID suffix specified by a UPnP vendor.
     * @return string
     */
    public function getUDN();

    /**
     * Service list
     * @return ServiceList
     */
    public function getServiceList();
}

?>
