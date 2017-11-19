<?php

namespace madurmanov\TwitterApiDriver;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
  public $consumerKey = '';
  public $consumerSecret = '';
  public $accessToken = '';
  public $accessTokenSecret = '';

  protected $api = null;

  public function init()
  {
    $this->api = new \Abraham\TwitterOAuth\TwitterOAuth(
      $this->consumerKey,
      $this->consumerSecret,
      $this->accessToken,
      $this->accessTokenSecret
    );
  }

  public function request($method, $params = [])
  {
    return $this->api->post($method, $params);
  }
}
