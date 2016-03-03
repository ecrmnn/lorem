<?php
namespace Ecrmnn\Lorem\Tests;

use Ecrmnn\Lorem\Lorem;
use PHPUnit_Framework_TestCase;

class LoremTest extends PHPUnit_Framework_TestCase
{
    private $lorem;

    public function setUp()
    {
        $this->lorem = new Lorem;
    }

    public function testCallingHtmlReturnsHtmlParagraph()
    {
        $this->assertStringStartsWith('<p>', $this->lorem->html());
        $this->assertStringEndsWith('</p>', $this->lorem->html());
    }

    public function testHtmlReturnsOneParagraphByDefault()
    {
        $string = $this->lorem->html();

        $paragraphStart = substr_count($string, '<p>');
        $paragraphEnd = substr_count($string, '</p>');

        $this->assertEquals(1, $paragraphStart);
        $this->assertEquals(1, $paragraphEnd);
    }

    public function testHtmlReturnsCorrectAmountOfParagraphs()
    {
        $numberOfParagraphs = rand(13, 37);

        $string = $this->lorem->html($numberOfParagraphs);

        $paragraphStart = substr_count($string, '<p>');
        $paragraphEnd = substr_count($string, '</p>');

        $this->assertEquals($numberOfParagraphs, $paragraphStart);
        $this->assertEquals($numberOfParagraphs, $paragraphEnd);
    }

    public function testImageReturnsHtmlImageWithDefaultSize()
    {
        $image = $this->lorem->image();

        $expected = '<img src="https://unsplash.it/1024/1024/?random" alt="Lorem">';

        $this->assertEquals($expected, $image);
    }

    public function testImageCanReturnHtmlAttributes()
    {
        $image = $this->lorem->image(1024, 1024, ['class' => 'img-responsive']);

        $expected = '<img src="https://unsplash.it/1024/1024/?random" alt="Lorem" class="img-responsive">';

        $this->assertEquals($expected, $image);
    }

    public function testImageCanReturnHtmlAttributesWithoutValue()
    {
        $image = $this->lorem->image(1024, 1024, ['class' => 'img-responsive', 'autofocus']);

        $expected = '<img src="https://unsplash.it/1024/1024/?random" alt="Lorem" class="img-responsive" autofocus>';

        $this->assertEquals($expected, $image);
    }
}
