<?php
use PHPUnit\Framework\TestCase;

class TestUserlisting extends TestCase
{
    public function testComponentFilePresent()
    {
       $this->assertFileExists(dirname(__FILE__) .'/../../../scriptsrc/components/php/computerlisting.enabled.comp.php');
    }

    public function testComponentFileisPHPFile()
    {
        $isPHPFile=true;

        if( strpos(file_get_contents(dirname(__FILE__) .'/../../../scriptsrc/components/php/computerlisting.enabled.comp.php'),"<?php") !== false) {
        }
        else
        {
            $isPHPFile=false;
        }
        if( strpos(file_get_contents(dirname(__FILE__) .'/../../../scriptsrc/components/php/computerlisting.enabled.comp.php'),"?>") !== false) {
        }
        else
        {
            $isPHPFile=false;
        }

        $this->assertTrue( $isPHPFile,'component File does not have php tags');

    }

}
?>
