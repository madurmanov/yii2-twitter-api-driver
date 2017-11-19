# yii2-twitter-api-driver
Module that enables send request to twitter api for Yii Framework 2.0.

## Installation
```
composer require madurmanov/yii2-twitter-api-driver "@dev"
```

## AccessToken
- Create app [https://apps.twitter.com](https://apps.twitter.com)
- Set access level to 'Read and write'
- Go to 'Keys and Access Tokens' tab and generate Access Token
- Use generated access token and consumer information for configurate

## Configuration
```
'modules' => [
  'TwitterApiDriver' => [
    'class' => 'madurmanov\TwitterApiDriver\Module',
    'consumerKey' => '',
    'consumerSecret' => '',
    'accessToken' => '',
    'accessTokenSecret' => ''
  ]
]
```

## Usage
```
$TwitterApiDriver = Yii::$app->getModule('TwitterApiDriver');
$TwitterApiDriver->request('statuses/update', [
  'status' => ''
]);
```

## License
**yii2-twitter-api-driver** is released under the MIT License. See the bundled `LICENSE.md` for details.
