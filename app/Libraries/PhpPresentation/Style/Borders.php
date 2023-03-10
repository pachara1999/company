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

namespace App\Libraries\PhpPresentation\Style;

use App\Libraries\PhpPresentation\ComparableInterface;

/**
 * \App\Libraries\PhpPresentation\Style\Borders.
 */
class Borders implements ComparableInterface
{
    /**
     * Left.
     *
     * @var \App\Libraries\PhpPresentation\Style\Border
     */
    private $left;

    /**
     * Right.
     *
     * @var \App\Libraries\PhpPresentation\Style\Border
     */
    private $right;

    /**
     * Top.
     *
     * @var \App\Libraries\PhpPresentation\Style\Border
     */
    private $top;

    /**
     * Bottom.
     *
     * @var \App\Libraries\PhpPresentation\Style\Border
     */
    private $bottom;

    /**
     * Diagonal up.
     *
     * @var \App\Libraries\PhpPresentation\Style\Border
     */
    private $diagonalUp;

    /**
     * Diagonal down.
     *
     * @var \App\Libraries\PhpPresentation\Style\Border
     */
    private $diagonalDown;

    /**
     * Hash index.
     *
     * @var int
     */
    private $hashIndex;

    /**
     * Create a new \App\Libraries\PhpPresentation\Style\Borders.
     */
    public function __construct()
    {
        // Initialise values
        $this->left = new Border();
        $this->right = new Border();
        $this->top = new Border();
        $this->bottom = new Border();
        $this->diagonalUp = new Border();
        $this->diagonalUp->setLineStyle(Border::LINE_NONE);
        $this->diagonalDown = new Border();
        $this->diagonalDown->setLineStyle(Border::LINE_NONE);
    }

    /**
     * Get Left.
     *
     * @return \App\Libraries\PhpPresentation\Style\Border
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Get Right.
     *
     * @return \App\Libraries\PhpPresentation\Style\Border
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Get Top.
     *
     * @return \App\Libraries\PhpPresentation\Style\Border
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Get Bottom.
     *
     * @return \App\Libraries\PhpPresentation\Style\Border
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * Get Diagonal Up.
     *
     * @return \App\Libraries\PhpPresentation\Style\Border
     */
    public function getDiagonalUp()
    {
        return $this->diagonalUp;
    }

    /**
     * Get Diagonal Down.
     *
     * @return \App\Libraries\PhpPresentation\Style\Border
     */
    public function getDiagonalDown()
    {
        return $this->diagonalDown;
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode(): string
    {
        return md5(
            $this->getLeft()->getHashCode()
            . $this->getRight()->getHashCode()
            . $this->getTop()->getHashCode()
            . $this->getBottom()->getHashCode()
            . $this->getDiagonalUp()->getHashCode()
            . $this->getDiagonalDown()->getHashCode()
            . __CLASS__
        );
    }

    /**
     * Get hash index.
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @return int|null Hash index
     */
    public function getHashIndex(): ?int
    {
        return $this->hashIndex;
    }

    /**
     * Set hash index.
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @param int $value Hash index
     *
     * @return $this
     */
    public function setHashIndex(int $value)
    {
        $this->hashIndex = $value;

        return $this;
    }
}
