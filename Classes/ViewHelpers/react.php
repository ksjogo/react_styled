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
    //echo $command;

    try {
        exec($command, $output);
    } catch (Exception $e) {
        //echo $e;
    }
    chdir($oldDir);
    return $output;
}

if (php_sapi_name() == "cli") {
    $output = PHPReact('./SSR/example.tsx');
    foreach ($output as $line) {
        echo "$line\n";
    }
}
