<?php
  class Post {
    // DB stuff
    private $conn;
    private $table = 'Test';

    // Post Properties
    public $id;
    public $name;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
        // Create query
        $query = 'SELECT id, name FROM ' . $this->table;

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
      }
  }
?>
