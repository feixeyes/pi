<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

namespace Pi\Application\Model\Block;

use Pi\Application\Model\Model;

/**
 * Block root model
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Root extends Model
{
    /**
     * Columns to be encoded
     *
     * @var array
     */
    protected $encodeColumns = array(
        'config'    => true,
    );
}
