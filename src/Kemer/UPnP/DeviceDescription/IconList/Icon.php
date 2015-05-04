<?php
namespace Kemer\UPnP\DeviceDescription;

class Icon
{

    private $mimetype;
    private $width;
    private $height;
    private $depth;
    private $url;

    public function __construct(array $icon = [])
    {
        $this->mimetype = isset($icon["mimetype"]) ? $icon["mimetype"] : null;
        $this->width = isset($icon["width"]) ? $icon["width"] : null;
        $this->height = isset($icon["height"]) ? $icon["height"] : null;
        $this->depth = isset($icon["depth"]) ? $icon["depth"] : null;
        $this->url = isset($icon["url"]) ? $icon["url"] : null;
    }

    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;
        return $this;
    }

    public function getMimetype()
    {
        return $this->mimetype;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

?>
