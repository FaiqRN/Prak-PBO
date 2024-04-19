<?php

require_once 'Database.php';
class Crud
{
    private $db;
    public function __construct()
    {
   
        $this->db = new Database();
    }

    public function create($jabatan, $keterangan) {

        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";

        $result = $this->db->conn->query($query);

        return $result;
    }

    public function read() {
        $query = "SELECT * FROM jabatan";
        $result = $this->db->conn->query($query);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function update($id, $jabatan, $keterangan) {
        $query = "UPDATE jabatan SET jabatan = ?, keterangan = ? WHERE id = ?";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("ssi", $jabatan, $keterangan, $id);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    public function delete($id) {

        $query = "DELETE FROM jabatan WHERE id = ?";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    public function readById($id) {

        $query = "SELECT * FROM jabatan WHERE id = ?";

        $stmt = $this->db->conn->prepare($query);

        $stmt->bind_param("i", $id);

        $stmt->execute();

        $result = $stmt->get_result();
    

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {

            return null;
        }
    }
}
?>
