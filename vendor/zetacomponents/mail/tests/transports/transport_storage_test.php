<?php
/**
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @version //autogentag//
 * @filesource
 * @package Mail
 * @subpackage Tests
 */

/**
 * @package Mail
 * @subpackage Tests
 */
class ezcMailTransportStorageTest extends ezcTestCase
{
    private static $sizes = array();

    public static function suite()
    {
        self::$sizes = array( 1539, 64072, 1696, 1725 );

        return new PHPUnit\Framework\TestSuite( __CLASS__ );
    }

    public function testImapMessageSource()
    {
        $transport = new ezcMailImapTransport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        $transport->selectMailbox( "Inbox" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchByMessageNr( 1 ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( self::$sizes[0], strlen( $source ) );
    }

    public function testImapMessageSourceFetchAll()
    {
        $transport = new ezcMailImapTransport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        $transport->selectMailbox( "Inbox" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchAll(), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( self::$sizes[0], strlen( $source ) );
    }

    public function testImapMessageSourceEmptySet()
    {
        $transport = new ezcMailImapTransport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        $transport->createMailbox( "Guybrush" );
        $transport->selectMailbox( "Guybrush" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchAll(), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $this->assertEquals( array(), $mail );
        $transport->selectMailbox( "Inbox" );
        $transport->deleteMailbox( "Guybrush" );
    }

    public function testPop3MessageSource()
    {
        $transport = new ezcMailPop3Transport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchByMessageNr( 1 ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( self::$sizes[0], strlen( $source ) );
    }

    public function testPop3MessageSourceFetchAll()
    {
        $transport = new ezcMailPop3Transport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchAll(), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( self::$sizes[0], strlen( $source ) );
    }

    public function testMboxMessageSource()
    {
        $transport = new ezcMailMboxTransport( dirname( __FILE__ ) . "/data/testlimit-mbox" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchByMessageNr( 1 ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( 2609, strlen( $source ) );
    }

    public function testMboxMessageSourceFetchAll()
    {
        $transport = new ezcMailMboxTransport( dirname( __FILE__ ) . "/data/testlimit-mbox" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchAll(), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( 2925, strlen( $source ) );
    }

    public function testMboxMessageEmpty()
    {
        $transport = new ezcMailMboxTransport( dirname( __FILE__ ) . "/data/empty.mbox" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchAll(), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $this->assertEquals( 0, count( $mail ) );
    }

    public function testVariableMessageSource()
    {
        $parser = new ezcMailParser();
        $message = file_get_contents( dirname( __FILE__ ) . "/data/test-variable" );

        $set = new ezcMailStorageSet( new ezcMailVariableSet( $message ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( 1445, strlen( $source ) );
    }

    public function testVariableMessageSourceEmpty()
    {
        $parser = new ezcMailParser();
        $message = "";

        $set = new ezcMailStorageSet( new ezcMailVariableSet( $message ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $this->assertEquals( array(), $mail );
    }

    public function testFileMessageSource()
    {
        $parser = new ezcMailParser();
        $messages = array( dirname( __FILE__ ) . "/data/test-variable" );

        $set = new ezcMailStorageSet( new ezcMailFileSet( $messages ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( 1444, strlen( $source ) );
    }

    public function testFileMessageSourceMultiple()
    {
        $parser = new ezcMailParser();
        $messages = array( dirname( __FILE__ ) . "/data/test-variable", dirname( __FILE__ ) . "/data/test-variable" );

        $set = new ezcMailStorageSet( new ezcMailFileSet( $messages ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();

        $source = file_get_contents( $files[0] );
        $this->assertEquals( 1444, strlen( $source ) );
        $source = file_get_contents( $files[1] );
        $this->assertEquals( 1444, strlen( $source ) );
    }

    public function testFileMessageSourceEmpty()
    {
        $parser = new ezcMailParser();
        $fileName = $this->tempDir . "/empty-message";
        $fileHandle = fopen( $fileName, "w" );
        fwrite( $fileHandle, "" );
        fclose( $fileHandle );
        $messages = array( $fileName );

        $set = new ezcMailStorageSet( new ezcMailFileSet( $messages ), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $this->assertEquals( array(), $mail );
    }

    /**
     * Test modified for issue #14776: ezcMailStorageSet generates bad file names.
     */
    public function testGetSourceFileNames()
    {
        $transport = new ezcMailImapTransport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        $transport->selectMailbox( "Inbox" );
        $parser = new ezcMailParser();

        $set = new ezcMailStorageSet( $transport->fetchAll(), $this->tempDir );
        $mail = $parser->parseMail( $set );
        $files = $set->getSourceFiles();
        $expected = array( getmypid() . '-' . time() . '-' . 1,
                           getmypid() . '-' . time() . '-' . 2,
                           getmypid() . '-' . time() . '-' . 3,
                           getmypid() . '-' . time() . '-' . 4, );

        for ( $i = 0; $i < count( $files ); $i++ )
        {
            $this->assertEquals( $expected[$i], basename( $files[$i] ) );
        }
    }

    public function setUp()
    {
        $this->tempDir = $this->createTempDir( 'ezcMailTransportStorageTest' );
    }

    public function tearDown()
    {
        $this->removeTempDir();

        $transport = new ezcMailImapTransport( "mta1.ez.no" );
        $transport->authenticate( "ezcomponents@mail.ez.no", "ezcomponents" );
        try
        {
            $transport->deleteMailbox( "Guybrush" );
        }
        catch ( ezcMailTransportException $e )
        {
        }
    }
}
?>
