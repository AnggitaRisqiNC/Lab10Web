<?php

class Database {
    public function __construct() {
        $this->host = HOST;
        $this->user = USER;
        $this->pass = PASS;
        $this->db = DATABASE;
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function get($table, $where=null) {
        if ($where) {
            $where = " WHERE ".$where;
        }
        $sql = "SELECT * FROM ".$table.$where;
        $sql = $this->conn->query($sql);
        $sql = $sql->fetch_assoc();
        return $sql;
    }
    
    public function insert($table, $data) {
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $column[] = "`$key`";
                $value[] = "'$val'";
            }
            $columns = implode(",", $column);
            $values = implode(",", $value);
        }
    
        $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ")";
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }

    public function update($table, $data, $where) {
        $update_value = "";
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $update_value[] = "`$key` = '" . $val . "'";
            }
            $update_value = implode(",", $update_value);
        }
    
        $sql = "UPDATE " . $table . " SET " . $update_value . " WHERE " . $where;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $filter) {
        $sql = "DELETE FROM ".$table." ".$filter;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }
}
?>