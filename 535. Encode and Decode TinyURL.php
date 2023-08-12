<?php

class Codec {
    /**
     * Encodes a URL to a shortened URL.
     * @param String $longUrl
     * @return String
     */
    function encode($longUrl) {
        return base64_encode($longUrl);
    }
    
    /**
     * Decodes a shortened URL to its original URL.
     * @param String $shortUrl
     * @return String
     */
    function decode($shortUrl) {
        return base64_decode($shortUrl);
    }
}

/**
 * Your Codec object will be instantiated and called as such:
 * $obj = Codec();
 * $s = $obj->encode($longUrl);
 * $ans = $obj->decode($s);
 */

 $obj = new Codec();
 $s = $obj->encode($longUrl);
 $ans = $obj->decode($s);



