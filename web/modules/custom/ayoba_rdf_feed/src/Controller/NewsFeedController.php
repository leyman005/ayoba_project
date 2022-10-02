<?php

namespace Drupal\ayoba_rdf_feed\Controller;

use \Drupal\Core\Controller\ControllerBase;
use \Drupal\Core\Form\FormStateInterface;

class NewsFeedController extends ControllerBase
{
    public function getFeed()
    {
        $url = \Drupal::config('ayoba_rdf_feed_url_form.settings')->get('url');
        // get the service
        $ayoba_rdf_feed_service = \Drupal::service('ayoba_rdf_feed.ayoba_rdf_feed_service');
        // set the url for the feed
        $ayoba_rdf_feed_service->setUrl($url);
        // get the feed
        $feed = $ayoba_rdf_feed_service->getFeed();
        // return the feed
        return [
            '#theme' => 'ayoba_rdf_feed',
            '#feeds' => $feed["channel"],
        ];
    }
}
