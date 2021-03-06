--TEST--
Casting color and opacity to pixel
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
print "--- Testing casts\n";

try {
	$im = new Imagick();
	$im->newImage(100, 100, "red");
	$im->tintImage("red", 0.5);
	echo "Casting color and opacity succeeded\n";
} catch (Exception $e) {
	echo "Casting color and opacity failed: " , $e->getMessage();
}

try {
	$im = new Imagick();
	$pixel = new ImagickPixel("red");
	$im->newImage(100, 100, $pixel);
	$im->tintImage($pixel, $pixel);
	echo "Setting color and opacity without cast succeeded\n";
} catch (Exception $e) {
	echo "Setting color and opacity without cast failed: " , $e->getMessage();
}

?>
--EXPECTF--
--- Testing casts
Casting color and opacity succeeded
Setting color and opacity without cast succeeded