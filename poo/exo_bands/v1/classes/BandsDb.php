<?php
require_once __DIR__ . '/Band.php';
require_once __DIR__ . '/StylesDb.php';
require_once __DIR__ . '/../functions.php';

class BandsDb
{
  /** @var Band[] */
  private array $bands;

  private const BANDS_FILE_PATH = __DIR__ . '/../data/bands.txt';

  public function __construct(StylesDb $stylesDb)
  {
    $bandsFileContent = file(self::BANDS_FILE_PATH, FILE_IGNORE_NEW_LINES);

    foreach ($bandsFileContent as $line) {
      $lineInfos = explode(',', $line);
      [$id, $name, $formationYear, $styleId] = $lineInfos;
      $this->bands[] = new Band(
        $id,
        $name,
        $formationYear,
        findBandStyle($styleId, $stylesDb)
      );
    }
  }

  /**
   * @return Band[]
   */
  public function getBands(): array
  {
    return $this->bands;
  }
}
