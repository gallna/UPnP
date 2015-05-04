<?php
namespace Kemer\UPnP\Browse;

interface ElementInterface
{
    public function getId();

    public function getParentId();

    public function getClass();

    public function getTitle();
}
