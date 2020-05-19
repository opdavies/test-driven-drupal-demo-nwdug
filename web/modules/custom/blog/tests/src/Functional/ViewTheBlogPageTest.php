<?php

namespace Drupal\Tests\blog\Functional;

use Drupal\Tests\BrowserTestBase;
use Symfony\Component\HttpFoundation\Response;

class ViewTheBlogPageTest extends BrowserTestBase {

  protected $defaultTheme = 'stark';

  protected static $modules = [
    'node',
    'blog',
  ];

  public function testTheBlogPageExists() {
    $this->drupalGet('/blog');

    $assert = $this->assertSession();
    $assert->statusCodeEquals(Response::HTTP_OK);
    $assert->responseContains('<h1>Blog</h1>');
    $assert->pageTextContains('Welcome to my blog!');
  }


}
