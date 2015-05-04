<?php
namespace Kemer\UPnP;

use Kemer\UPnP\Client\Container\Container;
use Kemer\UPnP\Client\Container\ContainersIterator;
use Kemer\UPnP\Client\Item\ItemsIterator;

interface ContentDirectoryInterface
{
    public function Browse($objectID = '0', $browseflag = 'BrowseDirectChildren', $start = 0, $count = 0, $key = 1);

    public function GetSearchCapabilities();

    public function GetSortCapabilities();

    public function GetSystemUpdateID();
}
