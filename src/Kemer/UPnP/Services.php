<?php
namespace Kemer\UPnP;

interface Services
{
    const MEDIA_SERVER = "urn:schemas-upnp-org:device:MediaServer:1";
    const MEDIA_RENDERER = "urn:schemas-upnp-org:device:MediaRenderer:1";
    const ROOT_DEVICE = "upnp:rootdevice";
    const ALL = "ssdp:all";

    const CONTENT_DIRECTORY = "urn:schemas-upnp-org:service:ContentDirectory:1";
    const RENDERING_CONTROL = "urn:schemas-upnp-org:service:RenderingControl:1";
    const CONNECTION_MANAGER = "urn:schemas-upnp-org:service:ConnectionManager:1";
    const AV_TRANSPORT = "urn:schemas-upnp-org:service:AVTransport:1";
}
