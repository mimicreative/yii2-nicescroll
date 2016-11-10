<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/21/2016
 * Time: 9:37 PM
 */

namespace mimicreative\assets;


use yii\web\AssetBundle;

class NiceScrollAsset extends AssetBundle {
  /**
   * @inherit
   */
  public $sourcePath = '@bower/jquery.nicescroll';

  public $depends = [
    'yii\web\JqueryAsset'
  ];

  /**
   * @inherit
   */
  public $js = [
    'dist/jquery.nicescroll.min.js',
  ];

  /**
   * @inherit
   */
  public $publishOptions = [
    'only' => [
      'dist/'
    ]
  ];
}