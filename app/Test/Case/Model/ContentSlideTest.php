<?php
App::uses('ContentSlide', 'Model');

/**
 * ContentSlide Test Case
 *
 */
class ContentSlideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.content_slide',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContentSlide = ClassRegistry::init('ContentSlide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContentSlide);

		parent::tearDown();
	}

}
