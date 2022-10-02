<?php

namespace Drupal\ayoba_rdf_feed;

class AyobaRdfFeedService
{
    private $url;

    public function getFeed()
    {
        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            )
        );

        $context = stream_context_create($arrContextOptions);

        try {
            // read the feed from rdf file
            $feed = file_get_contents($this->url, false, $context);
            $feed = str_replace(['<![CDATA[', ']]', '[', ']', '--'], '', $feed);
        } catch (\Exception $e) {
            \Drupal::logger('ayoba_rdf_feed')->error($e->getMessage());
        }

        try {
            // parse the feed
            $xml = simplexml_load_string($feed);
        } catch (\Exception $e) {
            \Drupal::logger('ayoba_rdf_feed')->error($e->getMessage());
        }

        try {
            // convert the feed to json
            $json = json_encode($xml);
        } catch (\Exception $e) {
            \Drupal::logger('ayoba_rdf_feed')->error($e->getMessage());
        }

        try {
            // convert the json to array
            $array = json_decode($json, TRUE);
        } catch (\Exception $e) {
            \Drupal::logger('ayoba_rdf_feed')->error($e->getMessage());
        }

        // return the array
        return $array;
    }

    // set the url for the feed
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
