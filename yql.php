<?php
/* Proxy-cache for Yahoo Weather queries... */
$cachetime = 10800;   // 3h

function sendWeather ($cachefile, $callback)
{
    // Get weather data from local cache
    if (file_exists ($cachefile))
    {
        $content = file_get_contents ("$cachefile");
        $content = preg_replace('/^[^\(]+/', "$callback", $content);
        echo $content;
        return true;
    }
    return false;
}

// Try to update the 'cachefile'
function updateCache ($cachefile)
{
    // URL to access
    $query = $_SERVER['QUERY_STRING'];
    $url = "http://query.yahooapis.com/v1/public/yql?$query";

    system ("echo \"$url\" >> /tmp/debug");
    system ("wget -T3 -q -O $cachefile.tmp '$url' && mv $cachefile.tmp $cachefile 2>&1 &");
    return true;
}


// Configure Timeout
$context = stream_context_create(array(
    'http' => array(
        'timeout' => 5,     // 5 seconds
    )
));

// Get callback ID
$callback = isset ($_GET['callback']) ? $_GET['callback'] : 'undefined';


$hash = "/tmp/". md5 ($_SERVER['HTTP_REFERER']);

$displayed = sendWeather ("$hash.weather", $callback);
$updated = false;

if (!file_exists ("$hash.weather") ||
    (time() - filemtime("$hash.weather") > $cachetime))
{
    $updated = updateCache ("$hash.weather");
}

if (! $displayed && $updated)
{
    sendWeather("$hash.weather", $callback);
}
?>
