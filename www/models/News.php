<?php

namespace Application\Models;

/**
 * Class NewsModel
 * @property $id
 * @property $title
 * @property $text
 */
class News
    extends \AbstractModel
{
    static protected $table = 'news';

}