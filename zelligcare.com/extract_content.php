<?php
$files = ["anxiety.html", "adhd.html", "bipolar.html", "depression.html", "insomnia.html", "life-transitions.html", "ocd.html", "trauma-ptsd.html", "autism-neurodivergence.html"];
foreach ($files as $file) {
    $html = file_get_contents($file);
    preg_match('/<div class="col-xs-12 group-block">(.*?)<\/div><\/div> <\/div>/s', $html, $matches);
    if (!empty($matches[1])) {
        $content = $matches[1];
        $content = preg_replace('/&rsquo;/', "'", $content);
        $content = preg_replace('/&mdash;/', "—", $content);
        $content = preg_replace('/&ldquo;/', '"', $content);
        $content = preg_replace('/&rdquo;/', '"', $content);
        file_put_contents("content_" . str_replace(".html", ".txt", $file), $content);
    }
}
echo "Done";
?>