<?php   
    
    /**
     * Created by Evert Developer
     * Dev in 2019
     */

    class Session
    {
        /**
         * EN : Create a session
         * PT-BR : Cria uma sessão
         */
        
        public function __construct()
        {
            session_start();
        }

        /**
         * EN : Destroy the session
         * PT-BR : Destroi a sessão
         */

        public function destroySession()
        {
            session_destroy();
        }

        /**
         * EN : Collects the session id
         * PT-BR : Coleta o id da sessão
         */

        public function sessionId()
        {
            return session_id();
        }

        /**
         * EN : Regenerate session id
         * PT-BR : Regenera o id da sessão
         */

        public function regenarateId()
        {
            session_regenerate_id();
        }
        
        /**
         * EN : Sets a variable within the session
         * PT-BR : Define uma variavel dentro da sessão
         */

        public function setInSession($var, $value)
        {
            $_SESSION[$var] = $value;
        }
    }
    
  ?>
