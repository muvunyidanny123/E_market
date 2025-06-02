<?php
class Product_model extends Model{
    private $tables = ['products'];
    
    public function __construct(){
        parent::__construct();
    }
    
    public function getAll(){
        $sql = "SELECT * FROM {$this->tables[0]}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getOne($id){
        $sql = "SELECT * FROM {$this->tables[0]} WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Modified save method to match parent's signature
  // Keep the original save method with one parameter
public function saveProduct($data){
    return parent::save($this->tables[0], $data);
}

// Add a compatible save method that matches the parent's signature
public function save($table, $data){
    // For consistency, still use the predefined table
    return parent::save($this->tables[0], $data);
}

    public function update($data){
        $id = $data['id'];
        unset($data['id']); // Remove ID from data to be updated
        
        $sql = "UPDATE {$this->tables[0]} SET ";
        $params = [];
        
        foreach($data as $key => $value){
            $sql .= "$key = ?, ";
            $params[] = $value;
        }
        
        $sql = rtrim($sql, ", ");
        $sql .= " WHERE id = ?";
        $params[] = $id;
        
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }
    
    public function delete($id){
        $sql = "DELETE FROM {$this->tables[0]} WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
    
    public function skuExists($sku, $excludeId = null){
        $sql = "SELECT COUNT(*) FROM {$this->tables[0]} WHERE sku = ?";
        $params = [$sku];
        
        if($excludeId){
            $sql .= " AND id != ?";
            $params[] = $excludeId;
        }
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchColumn() > 0;
    }
}
?>
