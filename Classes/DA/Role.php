<?php 

  class Role extends Session
  {   

      function set_logged($username,$level) {
         $this->session_set('user_token',['username'=>$username,
      'level'=>$level
      ]);
      }

      function set_logout() {
         $this->session_delete('user_token');
      }

      function session_user_logged() {
         $user = $this->session_get('user_token');
         return $user;
      }

      function is_admin() {
         $user = $this->session_user_logged();
         if(!empty($user['level']) && $user['level'] == '1')
         {
            return true;
         }
         return false;
      }

      function get_current_username(){
         $user = $this->session_user_logged();
         return (isset($user['username'])?$user['username']:'');
      }
      
      function get_current_level()
      {
         $user = $this->session_user_logged();
         return (isset($user['level'])?$user['level']:'');
      }

      function is_supper_admin(){
         $user = $this->session_user_logged();
         if(!empty($user['level']) && $user['level'] == '1' && $user['username'] == 'admin')
            return true;
         else
            return false;
      }

  }
?>