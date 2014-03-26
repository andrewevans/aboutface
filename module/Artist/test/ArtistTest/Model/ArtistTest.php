<?php
namespace ArtistTest\Model;

use Artist\Model\Artist;
use PHPUnit_Framework_TestCase;

class ArtistTest extends PHPUnit_Framework_TestCase
{
    public function testArtistInitialState()
    {
        $artist = new Artist();

        $this->assertNull($artist->genre, '"artist" should initially be null');
        $this->assertNull($artist->id, '"id" should initially be null');
        $this->assertNull($artist->first_name, '"first_name" should initially be null');
    }

    public function testExchangeArraySetsPropertiesCorrectly()
    {
        $artist = new Artist();
        $data  = array('first_name' => 'some first name',
                       'last_name'  => 'some last name',
                       'id'     => 123,
                       'genre' => 'some genre',
                       'year' => 'some year',
        );

        $artist->exchangeArray($data);

        $this->assertSame($data['first_name'], $artist->first_name, '"first_name" was not set correctly');
        $this->assertSame($data['last_name'], $artist->last_name, '"last_name" was not set correctly');
        $this->assertSame($data['id'], $artist->id, '"id" was not set correctly');
    }
/*
    public function testExchangeArraySetsPropertiesToNullIfKeysAreNotPresent()
    {
        $artist = new Artist();

        $artist->exchangeArray(array('artist' => 'some artist',
                                    'id'     => 123,
                                    'title'  => 'some title'));
        $artist->exchangeArray(array());

        $this->assertNull($artist->artist, '"artist" should have defaulted to null');
        $this->assertNull($artist->id, '"id" should have defaulted to null');
        $this->assertNull($artist->title, '"title" should have defaulted to null');
    }
*/
}