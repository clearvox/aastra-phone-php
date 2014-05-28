<?php
namespace Clearvox\Aastra\Phone;

class ConnectedDetails
{
    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var int
     */
    private $ip;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $mac;

    /**
     * @var string
     */
    private $firmware;

    public static function extractFromUserAgent($userAgent)
    {
        // Check it is an aastra phone
        if ( ! stristr($userAgent, 'Aastra')) {
            throw new Exception\InvalidUserAgentException($userAgent);
        }

        $splitDetails = preg_split('/ MAC:/', $userAgent);

        // Split the MAC+Firmware
        $macAndFirmware = preg_split('/ /', $splitDetails[1]);

        // Set the properties
        $model    = $splitDetails[0];
        $mac      = preg_replace('/\-/', '', $macAndFirmware[0]);
        $firmware = preg_replace('/V:/', '', $macAndFirmware[1]);

        return compact('model', 'mac', 'firmware');
    }

    public function __construct($mac, $firmware, $ip)
    {
        $this->mac      = $mac;
        $this->firmware = $firmware;
        $this->ip       = $ip;
    }

    /**
     * @return string
     */
    public function getFirmware()
    {
        return $this->firmware;
    }

    /**
     * @return int
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }
}