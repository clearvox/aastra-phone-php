<?php
namespace Clearvox\Aastra\Phone;

use Clearvox\Aastra\Phone\Model\AastraModelInterface;
use Clearvox\Aastra\XML\XMLObjectInterface;

/**
 * Class ConnectedPhone
 *
 * @category Clearvox
 * @package Aastra
 * @subpackage Phone
 * @author Leon Rowland <leon@rowland.nl>
 */
class ConnectedPhone
{
    /**
     * @var int
     */
    private $ip;

    /**
     * @var \Clearvox\Aastra\Phone\Model\AastraModelInterface
     */
    private $model;

    /**
     * Specify the network address of an unknown connected
     * aastra phone.
     *
     * @param int $ip
     */
    public function __construct(ConnectedDetails $details, AastraModelInterface $model)
    {
        $this->details = $details;
        $this->model   = $model;
    }

    /**
     * Return the instance of the Aastra Model assigned to this
     * Connected Phone.
     *
     * @return AastraModelInterface
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Using the XML Push Support of Aastra Phones, send the XML content
     * to the phone via a Push.
     *
     * THE PHONE REQUIRES THE IP OF THE FROM + THE SCRIPTS SERVER IN ITS
     * WHITELIST
     *
     * Can be blocked by network firewalls.
     *
     * @param int $from
     * @param XMLObjectInterface $xmlObject
     * @return string
     */
    public function pushTo($from, XMLObjectInterface $xmlObject)
    {
        $tempDOM = new \DOMDocument('1.0');
        $tempDOM->appendChild($tempDOM->importNode($xmlObject->generate(), true));

        // Get the XML string
        $xml = $tempDOM->saveXML();

        // Remove first line and replace with the required xml= string for pushing
        $xml = str_replace("<?xml version=\"1.0\"?>\n", 'xml=', $xml);

        // Start curl
        $ch = curl_init();

        // Curl Options
        curl_setopt($ch, CURLOPT_URL, $this->details->getIp() . '/');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,[
                "Host: {$from}",
                "Connection: Keep-Alive",
                "Content-Type: text/xml",
                "Content-Length: " . strlen($xml)
            ]);
        curl_setopt($ch, CURLOPT_REFERER, $from);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Send the request
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}