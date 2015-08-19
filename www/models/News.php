<?php

namespace Application\Models;

use Application\Classes\AbstractModel as AbstractModel;

/**
 * Class NewsModel
 * @property $id
 * @property $title
 * @property $text
 */
class News
    extends AbstractModel
{
    static protected $table = 'news';

}