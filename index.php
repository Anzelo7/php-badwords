<?php

$badWord = $_GET['word'];

//echo $badWord;

$paragrafo = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates sapiente harum reprehenderit at voluptate tempore possimus numquam dicta laudantium, saepe mollitia commodi quidem dolores. Deserunt sequi libero repudiandae quidem consectetur?";

echo '<div> Lunghezza paragrafo: ';

echo strlen($paragrafo);

echo '</div>';

$censoredParagrafo = str_ireplace($badWord, '***', $paragrafo);

$censoredLenght = strlen($censoredParagrafo);

?>
<p>
    <?= $paragrafo ?>
</p>
<div>
    Lunghezza censurata: <?= $censoredLenght ?>
</div>
<p>
    <?php echo $censoredParagrafo ?>
</p>