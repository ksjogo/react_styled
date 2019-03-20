<?php
function PHPReact(string $filename)
{
    $basepath = realpath('../../' . __DIR__);
    $dirPath = realpath($basepath . './');
    $indexPath = realpath($basepath . './index.js');
    $scriptPath = realpath($basepath . './' . $filename);

    $oldDir = getcwd();
    chdir($dirPath);
    $command = "node ${indexPath} ${scriptPath}";

    try {
        exec($command, $output);
    } catch (Exception $e) {
        return array($e, null);
    }
    chdir($oldDir);
    return array(null, join("\n", $output));
}

if (php_sapi_name() == "cli") {
    $output = PHPReact('./SSR/example.tsx');
    echo $output[0];
    echo $output[1];
}
