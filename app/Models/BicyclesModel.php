<?php
namespace App\Models;
use CodeIgniter\Model;

class BicyclesModel extends Model
{
    public function getBicycleTypes()
    {
        try
        {
            $sql = "SELECT bicycle_type FROM bicycle_types ORDER BY RANDOM() LIMIT 1";
            $query = $this->db->query($sql);
            $result = $query->getRowArray();
            
            return $result;            
        } 
        catch (\Exception $ex) {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
        }
    }
    
    public function getBicycleTires()
    {
        try
        {
            $sql = "SELECT tire_type FROM bicycle_tires ORDER BY RANDOM() LIMIT 1";
            $query = $this->db->query($sql);
            $result = $query->getRowArray();
            
            return $result;            
        } 
        catch (\Exception $ex) {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
        }
    }

    public function getBicycleColors()
    {
        try
        {
            $sql = "SELECT color FROM bicycle_colors ORDER BY RANDOM() LIMIT 1";
            $query = $this->db->query($sql);
            $result = $query->getRowArray();
            
            return $result;            
        } 
        catch (\Exception $ex) {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
        }
    }    
}
