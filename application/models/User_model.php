<?php

    class User_model extends CI_model
    {

        function Create($formArray)
        {
            $this->db->insert('users',$formArray);
        }

        function all()
        {
            return $users = $this->db->get('users')->result_array();
        }

        function getuser($userID)
        {
            $this->db->where('user_id',$userID);
            return $user = $this->db->get('users')->row_array();
        }

        function updateUser($userID,$formArray)
        {
            $this->db->where('user_id',$userID);
            $this->db->update('users',$formArray);
        }

        function deleteUser($userID)
        {
            $this->db->where('user_id',$userID);
            $this->db->delete('users');
        }

    }

?>