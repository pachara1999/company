<?php
/**
 * This file is part of PHPPresentation - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPresentation is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPPresentation/contributors.
 *
 * @see        https://github.com/PHPOffice/PHPPresentation
 *
 * @copyright   2009-2015 PHPPresentation contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

declare(strict_types=1);

namespace App\Libraries\PhpPresentation\Writer;

use App\Libraries\Common\Adapter\Zip\ZipInterface;
use App\Libraries\PhpPresentation\HashTable;
use App\Libraries\PhpPresentation\PhpPresentation;

abstract class AbstractDecoratorWriter
{
    /**
     * @return ZipInterface
     */
    abstract public function render(): ZipInterface;

    /**
     * @var \App\Libraries\PhpPresentation\HashTable
     */
    protected $oHashTable;

    /**
     * @var PhpPresentation
     */
    protected $oPresentation;

    /**
     * @var ZipInterface
     */
    protected $oZip;

    /**
     * @return $this
     */
    public function setDrawingHashTable(HashTable $hashTable)
    {
        $this->oHashTable = $hashTable;

        return $this;
    }

    /**
     * @return HashTable
     */
    public function getDrawingHashTable()
    {
        return $this->oHashTable;
    }

    /**
     * @return $this
     */
    public function setPresentation(PhpPresentation $oPresentation)
    {
        $this->oPresentation = $oPresentation;

        return $this;
    }

    /**
     * @return PhpPresentation
     */
    public function getPresentation()
    {
        return $this->oPresentation;
    }

    /**
     * @return $this
     */
    public function setZip(ZipInterface $oZip)
    {
        $this->oZip = $oZip;

        return $this;
    }

    /**
     * @return ZipInterface
     */
    public function getZip()
    {
        return $this->oZip;
    }
}
