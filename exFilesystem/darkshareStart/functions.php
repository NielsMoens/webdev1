<?php

define('APACHE_MIME_TYPES_URL','http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types');


//Credits: http://jeffreysambells.com/2012/10/25/human-readable-filesize-php
function human_filesize($bytes, $decimals = 2) {
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

function file_is_image($content_type)
{
    //TODO: CHECK if file is of a image content type
    return true;
}

function file_is_text($content_type)
{
    //TODO: CHECK if file is of a text content type
    return true;
}

