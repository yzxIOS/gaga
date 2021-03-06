<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_file_download.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiFileDownloadResponse</code>
 */
class ApiFileDownloadResponse extends \Google\Protobuf\Internal\Message
{
    protected $ret;

    public function __construct() {
        \GPBMetadata\Site\ApiFileDownload::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes file = 1;</code>
     * @return string
     */
    public function getFile()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>bytes file = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fileBase64 = 2;</code>
     * @return string
     */
    public function getFileBase64()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>string fileBase64 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileBase64($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRet()
    {
        return $this->whichOneof("ret");
    }

}

