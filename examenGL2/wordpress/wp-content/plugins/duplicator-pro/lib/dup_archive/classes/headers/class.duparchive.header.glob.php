<?php
if (!defined("ABSPATH") && !defined("DUPXABSPATH"))
    die("");
require_once(dirname(__FILE__).'/../util/class.duparchive.util.php');
require_once(dirname(__FILE__).'/class.duparchive.header.u.php');

if (!class_exists('DupArchiveGlobHeader')) {

// Format
// #C#{$originalSize}#{$storedSize}!
    class DupArchiveGlobHeader //extends HeaderBase
    {

        //	public $marker;
        public $originalSize;
        public $storedSize;
        public $hash;

        const MaxHeaderSize = 255;

        public function __construct()
        {
            
        }

        public static function readFromArchive($archiveHandle, $skipGlob)
        {
            $instance     = new DupArchiveGlobHeader();
            $startElement = fread($archiveHandle, 3);

            //if ($marker != '?G#') {
            if ($startElement !== '<G>') {
                throw new Exception("Invalid glob header marker found {$startElement}. location:".ftell($archiveHandle));
            }

            $instance->originalSize = DupArchiveHeaderU::readStandardHeaderField($archiveHandle, 'OS');
            $instance->storedSize   = DupArchiveHeaderU::readStandardHeaderField($archiveHandle, 'SS');
            $instance->hash         = DupArchiveHeaderU::readStandardHeaderField($archiveHandle, 'HA');

            // Skip the </G>
            fread($archiveHandle, 4);

            if ($skipGlob) {
                DupProSnapLibIOU::fseek($archiveHandle, $instance->storedSize, SEEK_CUR);
            }

            return $instance;
        }

        public function writeToArchive($archiveHandle)
        {
            // <G><OS>x</OS>x<SS>x</SS><HA>x</HA></G>

            $headerString = '<G><OS>'.$this->originalSize.'</OS><SS>'.$this->storedSize.'</SS><HA>'.$this->hash.'</HA></G>';

            //DupProSnapLibIOU::fwrite($archiveHandle, $headerString);
            $bytes_written = @fwrite($archiveHandle, $headerString);

            if ($bytes_written === false) {
                throw new Exception('Error writing to file.');
            } else {
                return $bytes_written;
            }
        }
    }
}