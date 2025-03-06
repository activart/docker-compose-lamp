<?php
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('redis', 6379); 
   echo "<h1>Connection to server sucessfully</h1>"; 
   //check whether server is running or not 
   echo "<p>Server is running: " . $redis->ping() . "</p>";
    //set the data in redis string 
    $redis->set("obj1", "Redis connection is working");
   // Get the stored data and print it
   echo "<p>Stored string in redis:: " . $redis->get("obj1") . "</p>";
