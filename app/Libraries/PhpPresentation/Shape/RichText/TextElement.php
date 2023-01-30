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

namespace App\Libraries\PhpPresentation\Shape\RichText;

use App\Libraries\PhpPresentation\Shape\Hyperlink;
use App\Libraries\PhpPresentation\Style\Font;

/**
 * Rich text text element.
 */
class TextElement implements TextElementInterface
{
    /**
     * Text.
     *
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    protected $language;

    /**
     * Hyperlink.
     *
     * @var Hyperlink|null
     */
    protected $hyperlink;

    /**
     * Create a new \App\Libraries\PhpPresentation\Shape\RichText\TextElement instance.
     *
     * @param string $pText Text
     */
    public function __construct($pText = '')
    {
        // Initialise variables
        $this->text = $pText;
    }

    /**
     * Get text.
     *
     * @return string Text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text.
     *
     * @param string $pText Text value
     *
     * @return \App\Libraries\PhpPresentation\Shape\RichText\TextElementInterface
     */
    public function setText($pText = '')
    {
        $this->text = $pText;

        return $this;
    }

    /**
     * Get font.
     */
    public function getFont(): ?Font
    {
        return null;
    }

    public function hasHyperlink(): bool
    {
        return !is_null($this->hyperlink);
    }

    public function getHyperlink(): Hyperlink
    {
        if (is_null($this->hyperlink)) {
            $this->hyperlink = new Hyperlink();
        }

        return $this->hyperlink;
    }

    /**
     * Set Hyperlink.
     *
     * @return \App\Libraries\PhpPresentation\Shape\RichText\TextElement
     */
    public function setHyperlink(Hyperlink $pHyperlink = null)
    {
        $this->hyperlink = $pHyperlink;

        return $this;
    }

    /**
     * Get language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set language.
     *
     * @param string $language
     *
     * @return TextElement
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode(): string
    {
        return md5($this->text . (is_null($this->hyperlink) ? '' : $this->hyperlink->getHashCode()) . __CLASS__);
    }
}
