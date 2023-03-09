<?php
require_once __DIR__ . '/Style.php';

class StylesDb
{
  /** @var Style[] */
  private array $styles;

  private const STYLES_FILE_PATH = __DIR__ . '/../data/styles.txt';

  public function __construct()
  {
    $stylesFileContent = file(self::STYLES_FILE_PATH, FILE_IGNORE_NEW_LINES);

    foreach ($stylesFileContent as $line) {
      $lineInfos = explode(',', $line);
      $this->styles[] = new Style(...$lineInfos);
    }
  }

  /**
   * @return Style[]
   */
  public function getStyles(): array
  {
    return $this->styles;
  }
}
