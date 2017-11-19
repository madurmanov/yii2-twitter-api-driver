# yii2-twitter-api-driver
Module that enables send request to twitter api for Yii Framework 2.0.

## Installation
```
composer require madurmanov/yii2-twitter-api-driver "@dev"
```

## Configuration
```
'modules' => [
  'TwitterApiDriver' => [
    'class' => 'madurmanov\TwitterApiDriver\Module',
    'consumerKey' => '',
    'consumerSecret' => '',
    'oauthToken' => '',
    'oauthSecret' => ''
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
