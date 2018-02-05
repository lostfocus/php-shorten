<?php

class ShortenTest extends PHPUnit_Framework_TestCase {

	public function testBasics() {
		$shorten = new \Marcgoertz\Shorten\Shorten();

		$this->assertEquals(
			'<a href="https://example.com/">Go to exam</a>…',
			$shorten->truncateMarkup('<a href="https://example.com/">Go to example site</a>', 10)
		);

		$this->assertEquals(
			'<a href="https://example.com/">Go to</a>…',
			$shorten->truncateMarkup('<a href="https://example.com/">Go to example site</a>', 10, '…', FALSE, TRUE)
		);

		$this->assertEquals(
			'<a href="https://example.com/">Go to…</a>',
			$shorten->truncateMarkup('<a href="https://example.com/">Go to example site</a>', 10, '…', TRUE, TRUE)
		);

		$this->assertEquals(
			'Lorem ipsum <b>dolor</b> sit amet',
			$shorten->truncateMarkup('Lorem ipsum <b>dolor</b> sit amet', 26)
		);
	}
}