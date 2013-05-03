<?php

class CollectionTest extends MongoMinifyTest {

    public function testGet()
    {
        $collection1 = $this->client->currentDb()->selectCollection('dot.syntax.name');
        $collection2 = $this->client->currentDb()->dot->syntax->name;
        $this->assertEquals($collection1->getName(), $collection2->getName());
    }

    public function testToString()
    {
         $collection = $this->client->currentDb()->selectCollection('dot.syntax.name');
         $this->assertEquals((String) $collection, 'mongominify.dot.syntax.name');
    }

}