<?

$tmpdir    = $_SERVER['DOCUMENT_ROOT'].'/modxtmp/';



$zip = file_get_contents('http://modx.com/download/latest/');
file_put_contents('modx.zip', $zip);
echo '<p>Скачан архив с MODx</p>';
echo '<p>Начинаю распаковку</p>';
$zip = new ZipArchive;
if ($zip->open('modx.zip') === TRUE) {
    $zip->extractTo('modxtmp');
    $zip->close();
    @unlink('modx.zip');
    echo '<p>Архив распакован</p>';

    echo '<p>Перемещаем файлы в корень сайта</p>';
    $files = scandir($tmpdir);
    if (!empty($files[2])){
        $path = $tmpdir.$files[2];
        $filesmodx = scandir($path);
        foreach ($filesmodx as $filename) {
            if ($filename=='.') continue;
            if ($filename=='..') continue;
            $res = rename($path.'/'.$filename, $_SERVER['DOCUMENT_ROOT'].'/'.$filename);
        }
        unlink($path);
        unlink($tmpdir);
        header('Location: /setup/');
    }

} else {
    echo '<p>Неудача</p>';
}