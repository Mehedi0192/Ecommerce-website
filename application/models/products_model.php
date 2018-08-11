<?php

if (!defined('BASEPATH'))
    exit('Hacking Attempt : Get Out of the system ..!');

class Products_model extends CI_Model {

    var $table = 'products';

    public function index() {
        $this->db->select('*');

        $this->db->from('products');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->row();
    }

    public function save($data) {
        $this->db->insert('products', $data);

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update($data, $id) {
        $this->db->update('products', $data, array('id' => $id));

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id) {
        $this->db->delete('products', array('id' => $id));

        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }

    public function productbycategoryid($categoryid) {
        $this->db->select('*');

        $this->db->from('products');
        $this->db->where('categoryid', $categoryid);
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }

    public function view($sel, $table, $where = null, $joins = null, $limit = NULL) {
        if ($where) {
            foreach ($where as $key => $value) {
                $this->db->where("{$key}", "{$value}");
            }
        }
        $this->db->select($sel);
        $this->db->from($table);
        if ($joins) {
            foreach ($joins as $key => $value) {
                $this->db->join($key, $value);
            }
        }
        if ($limit) {
            $this->db->limit($limit[0], $limit[1]);
        }
        return $this->db->get()->result();
    }

}
