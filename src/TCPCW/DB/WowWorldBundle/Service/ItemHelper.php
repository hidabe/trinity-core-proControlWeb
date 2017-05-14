<?php
namespace TCPCW\DB\WowWorldBundle\Service;

use Doctrine\Common\Cache\ChainCache;
use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\DoctrineCacheStorage;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\HandlerStack;
use Doctrine\Common\Cache\ArrayCache;

class ItemHelper
{
    private $emWowWorld;
    private $client;

    public function __construct(EntityManager $emWowWorld)
    {
        $this->emWowWorld = $emWowWorld;

        // Create default HandlerStack
        $stack = HandlerStack::create();

        $stack->push(new CacheMiddleware(
            new GreedyCacheStrategy(
                new DoctrineCacheStorage(
                    new FilesystemCache('/tmp/')
                ),
                1800000 // Not expiration! ;-)
            )
        ), 'greedy-cache');

        // Initialize the client with the handler option
        $this->client = new Client(['handler' => $stack]);
    }

    public function getXMLFromItemId($itemId) {
        $url = "http://www.wowhead.com/item=".$itemId."&xml";
        $res = $this->client->request('GET', $url);
        $xmlContent = $res->getBody()->getContents();
        $xmlBody = new Crawler($xmlContent);
        return $xmlBody;
    }

    public function getIconFromItemId($itemId) {
        $xmlBody = $this->getXMLFromItemId($itemId);
        $icon = $xmlBody->filter("icon");
        return "http://wow.zamimg.com/images/wow/icons/large/".$icon->text().".jpg";
    }

    public function getHTMLTooltipFromItemId($itemId) {
        $xmlBody = $this->getXMLFromItemId($itemId);
        $htmlTooltip = $xmlBody->filter("htmlTooltip");
        return $htmlTooltip->text();
    }
}