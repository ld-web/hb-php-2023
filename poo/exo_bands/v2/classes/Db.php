<?php
require_once 'Style.php';
require_once 'Band.php';

class Db
{
  /** @var Style[] */
  private ?array $styles = null;
  /** @var Band[] */
  private ?array $bands = null;

  private const STYLES_DB_PATH = __DIR__ . '/../data/styles.txt';
  private const BANDS_DB_PATH = __DIR__ . '/../data/bands.txt';

  public function __construct()
  {
    /* Indication - Cours
      Je charge mes fichiers dans l'ordre
      Car j'ai besoin des styles pour charger mes groupes
      Par ailleurs, dans loadBands, je m'assure par programmation
      que les styles ont été chargés
      Pour ce faire, j'initialise la StylesDb à null
      Comme ça, si au moment du chargement des groupes,
      StylesDb est toujours à null, je peux lancer une exception
      et empêcher un chargement incorrect
    */
    $this->loadStyles();
    $this->loadBands();
  }

  public function getStyleById(int $id): ?Style
  {
    foreach ($this->styles as $style) {
      if ($style->getId() === $id) {
        return $style;
      }
    }

    return null;
  }

  private function loadStyles()
  {
    $stylesFileContent = file(self::STYLES_DB_PATH, FILE_IGNORE_NEW_LINES);

    foreach ($stylesFileContent as $line) {
      $lineInfos = explode(',', $line);
      $this->styles[] = new Style(...$lineInfos);
    }
  }

  private function loadBands()
  {
    if ($this->styles === null) {
      throw new Exception('Il faut charger les styles avant de charger les groupes');
    }

    $bandsFileContent = file(self::BANDS_DB_PATH, FILE_IGNORE_NEW_LINES);

    foreach ($bandsFileContent as $line) {
      $lineInfos = explode(',', $line);
      [$id, $name, $formationYear, $styleId] = $lineInfos;
      $this->bands[] = new Band(
        $id,
        $name,
        $formationYear,
        $this->getStyleById($styleId)
      );
    }
  }

  /**
   * @return Band[]|null
   */
  public function getBands(): ?array
  {
    return $this->bands;
  }
}
