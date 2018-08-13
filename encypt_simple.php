<?php
define("BLENC_ENCRYPTION_KEY", "myveryHardEncryptedPassowrdOMG!");
/*
*	@summary using blenc_encrypt from blenc 
*	@see string blenc_encrypt ( string $plaintext , string $encodedfile [, string $encryption_key ] )
*	@params plaintext : A source code to encrypt. Does not need to contain opening/closing PHP tags
*	@params encodedfile : The filename where BLENC will save the encoded source.
*	@params encryption_key : The key that BLENC will use to encrypt plaintext content. If not given BLENC will create a valid key.
*	@author Danish	https://github.com/yeomann
*/
	error_reporting(-1);	
	$html = "";
	$SOURCE_CODE  = "simple.php";
    $file_name = basename($SOURCE_CODE);
 
    $unencrypted_key = md5(time()); // or using above DEFINE |^

    $source_code = file_get_contents($SOURCE_CODE);
    //This covers old-asp tags, php short-tags, php echo tags, and normal php tags.
    // $source_code = preg_replace(array('/^<(\?|\%)\=?(php)?/', '/(\%|\?)>$/'), array('',''), $source_code);
    // The encoded source passed to blenc_encrypt() cannot contain
	// any php tags. We are removing php tags at the beginning and
	// end of file. Also checking that there are no other php tag
	// openings/closings.
	$source_code = preg_replace('#^<'.'\?php\s+#', '', $source_code);
	$source_code = preg_replace('#\s+\?'.'>\s*$#', '', $source_code);
	if (preg_match('#<'.'\?#', $source_code)
        || preg_match('#\?'.'>#', $source_code)) {
	    print("Script to be encoded can only contain PHP code.");
	    print(" Only a single php opening tag at the beginning of file");
	    print(" and a single php closing tag at the end of file are allowed.");
	    print(" This is a limitation as of BENC encoder 1.1.4b.");
	    exit();
	}
    $html .= "<br> BLENC blowfish unencrypted key: ". BLENC_ENCRYPTION_KEY . PHP_EOL;

	/* create the encrypted version */
	// $redistributable_key = blenc_encrypt($source_code, './encrypted/' . $file_name);
	$redistributable_key = blenc_encrypt($source_code,  './encrypted/'. $file_name, BLENC_ENCRYPTION_KEY);
    $html .= "<br> BLENC size of content: " . strlen($source_code) . PHP_EOL;
    
	/* read which is the key_file */
	$key_file = ini_get('blenc.key_file');
	/* save the redistributable key */
	// file_put_contents($key_file, $redistributable_key."\n", FILE_APPEND);
	file_put_contents($key_file, $redistributable_key);
    $html .= "<br> BLENC redistributable key file key_file.blenc updated." . PHP_EOL;
    echo $html;
?>


