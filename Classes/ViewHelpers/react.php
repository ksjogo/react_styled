<?php
function PHPReact(string $filename)
{
    $basePath = realpath(__DIR__ . '/../../');
    $indexPath = realpath($basePath . '/index.js');
    $scriptPath = realpath($basePath . '/' . $filename);

    $oldDir = getcwd();
    chdir($basePath);
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
