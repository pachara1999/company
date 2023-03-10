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

namespace App\Libraries\PhpPresentation\Writer\PowerPoint2007;

use App\Libraries\Common\Adapter\Zip\ZipInterface;
use App\Libraries\Common\XMLWriter;

class PptTableProps extends AbstractDecoratorWriter
{
    /**
     * @return ZipInterface
     */
    public function render(): ZipInterface
    {
        // Create XML writer
        $objWriter = new XMLWriter(XMLWriter::STORAGE_MEMORY);

        // XML header
        $objWriter->startDocument('1.0', 'UTF-8', 'yes');

        // a:tblStyleLst
        $objWriter->startElement('a:tblStyleLst');
        $objWriter->writeAttribute('xmlns:a', 'http://schemas.openxmlformats.org/drawingml/2006/main');
        $objWriter->writeAttribute('def', '{5C22544A-7EE6-4342-B048-85BDC9FD1C3A}');
        $objWriter->endElement();

        $this->getZip()->addFromString('ppt/tableStyles.xml', $objWriter->getData());

        return $this->getZip();
    }
}
