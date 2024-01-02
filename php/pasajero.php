<?php 

    class pasajero {
        private string $tipoIdentificacion;
        private int $identificacion;
        private string $usuario;
        private string $contraseña;
        private string $nombre;
        private string $pais;
        private string $ciudad;
        private string $direccion;
        private int $codigoPostal;
        private int $numeroTelefonico;
        private string $email;

        #Constructor

        function __construct($tipoId, $id, $us, $con, $nom, $pa, $ciu, $dir, $codpo, $numte, $em) {
            $this-> tipoIdentificacion = $tipoId;
            $this-> identificacion = $id;
            $this-> usuario = $us;
            $this-> contraseña = $con;
            $this-> nombre = $nom;
            $this-> pais = $pa;
            $this-> ciudad = $ciu;
            $this-> direccion = $dir;
            $this-> codigoPostal = $codpo;
            $this-> numeroTelefonico = $numte;
            $this-> email = $em;
        }

        #Setters

        public function setTipoIdentificacion($tipoId) {
            $this->tipoIdentificacion = $tipoId;
        }

        public function setIdentificacion($id) {
            $this->identificacion = $id;
        }

        public function setUsuario($user) {
            $this->usuario = $user;
        }

        public function setContraseña($pass) {
            $this->contraseña = $pass;
        }

        public function setNombre($name) {
            $this->nombre = $name;
        }

        public function setPais($country) {
            $this->pais = $country;
        }

        public function setCiudad($city) {
            $this->ciudad = $city;
        }

        public function setDireccion($address) {
            $this->direccion = $address;
        }

        public function setcodigoPostal($postal) {
            $this->codigoPostal = $postal;
        }

        public function setnumeroTelefonico($telefono) {
            $this->numeroTelefonico = $telefono;
        }

        public function setEmail($correo) {
            $this->email = $correo;
        }

        #Getters

        public function getTipoIdentificacion() {
            return $this->tipoIdentificacion;
        }

        public function getIdentificacion() {
            return $this->identificacion;
        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function getContraseña() {
            return $this->contraseña;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getPais() {
            return $this->pais;
        }

        public function getCiudad() {
            return $this->ciudad;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function getCodigoPostal() {
            return $this->codigoPostal;
        }

        public function getNumeroTelefonico() {
            return $this->numeroTelefonico;
        }

        public function getEmail() {
            return $this->email;
        }
    }

?>