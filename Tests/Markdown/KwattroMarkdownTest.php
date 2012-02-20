<?php

/**
 * This file is part of the KwattroMarkdownBundle package.
 * 
 * (c) Christophe Willemsen <willemsen.christophe@gmail.com>
 * 
 * Released under the MIT License.
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that is bundled with this package.
 */
namespace Kwattro\MarkdownBundle\Tests\Markdown;

use Kwattro\MarkdownBundle\Markdown\KwattroMarkdown as Markdown;

class MarkdownBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testMarkdown()
    {
        $md = new Markdown(array(), 'html');
        $this->assertTrue($md instanceof Markdown);
    }
    
    public function testMarkdownParser()
    {
        $md = new Markdown(array(), 'html');
        $this->assertTrue($md->getParser() instanceof \Sundown\Markdown);
    }
    
    public function testDefaultExtensions()
    {
        $md = new Markdown(array(), 'html');
        $extensions = $md->getEnabledExtensions();
        $this->assertTrue($extensions['autolink']);
    }
}