<?php
/* Proxy-cache for Yahoo Weather queries... */
$cachetime = 600;   // 10min

// Configure Timeout
$context = stream_context_create(array(
    'http' => array(
        'timeout' => 5,     // 5 seconds
    )
));

// Get callback ID
$callback = isset ($_GET['callback']) ? $_GET['callback'] : 'undefined';

// URL to access
$query = $_SERVER['QUERY_STRING'];
$url = "http://query.yahooapis.com/v1/public/yql?$query";

// If cache is up-to-date, do not request online data
$hash = "/tmp/". md5 ($_SERVER['HTTP_REFERER']);
if (file_exists ("$hash.weather") &&
    (time() - filemtime("$hash.weather") < $cachetime))
{
    // Get weather data from local cache
    $content = file_get_contents ("$hash.weather");
    $content = preg_replace('/^[^\(]+/', "$callback", $content);
}
else
{
    // Load remote URL
    $content = file_get_contents($url, false, $context);
    if ($content === FALSE)
    {
        if (file_exists ("$hash.weather"))
        {
            $content = file_get_contents ("$hash.weather");
            $content = preg_replace('/^[^\(]+/', "$callback", $content);
        }
        else
            $content = NULL;
    }
    else
    {
        file_put_contents ("$hash.weather", $content);
    }
}

echo $content;
?>
