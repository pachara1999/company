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

namespace App\Libraries\PhpPresentation;

use App\Libraries\PhpPresentation\Exception\InvalidClassException;
use App\Libraries\PhpPresentation\Exception\InvalidFileFormatException;
use App\Libraries\PhpPresentation\Reader\ReaderInterface;
use App\Libraries\PhpPresentation\Writer\WriterInterface;
use ReflectionClass;

/**
 * IOFactory.
 */
class IOFactory
{
    /**
     * Autoresolve classes.
     *
     * @var array<int, string>
     */
    private static $autoResolveClasses = ['Serialized', 'ODPresentation', 'PowerPoint97', 'PowerPoint2007'];

    /**
     * Create writer.
     *
     * @param PhpPresentation $phpPresentation
     * @param string $name
     */
    public static function createWriter(PhpPresentation $phpPresentation, string $name = 'PowerPoint2007'): WriterInterface
    {
        return self::loadClass('App\\Libraries\\PhpPresentation\\Writer\\' . $name, 'Writer', $phpPresentation);
    }

    /**
     * Create reader.
     *
     * @param string $name
     */
    public static function createReader(string $name): ReaderInterface
    {
        return self::loadClass('App\\Libraries\\PhpPresentation\\Reader\\' . $name, 'Reader');
    }

    /**
     * Loads PhpPresentation from file using automatic ReaderInterface resolution.
     *
     * @throws InvalidFileFormatException
     */
    public static function load(string $pFilename): PhpPresentation
    {
        // Try loading using self::$autoResolveClasses
        foreach (self::$autoResolveClasses as $autoResolveClass) {
            $reader = self::createReader($autoResolveClass);
            if ($reader->canRead($pFilename)) {
                return $reader->load($pFilename);
            }
        }

        throw new InvalidFileFormatException(
            $pFilename,
            IOFactory::class,
            'Could not automatically determine the good ' . ReaderInterface::class
        );
    }

    /**
     * Load class
     *
     * @param string $class
     * @param string $type
     * @param PhpPresentation|null $phpPresentation
     *
     * @return object
     *
     * @throws InvalidClassException
     */
    private static function loadClass(string $class, string $type, PhpPresentation $phpPresentation = null)
    {
        if (!class_exists($class)) {
            throw new InvalidClassException($class, $type . ': The class doesn\'t exist');
        }
        if (!self::isConcreteClass($class)) {
            throw new InvalidClassException($class, $type . ': The class is an abstract class or an interface');
        }
        if (is_null($phpPresentation)) {
            return new $class();
        }

        return new $class($phpPresentation);
    }

    /**
     * Is it a concrete class?
     */
    private static function isConcreteClass(string $class): bool
    {
        $reflection = new ReflectionClass($class);

        return !$reflection->isAbstract() && !$reflection->isInterface();
    }
}
