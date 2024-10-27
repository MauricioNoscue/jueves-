<?php

    class Conexion{
        private $servidor;
        private $usuario;
        private $password;
        private $puerto;
        private $baseDatos;

        public function __construct(){
            $this->servidor="localhost";
            $this->usuario="postgres";
            $this->password="123456";
            $this->puerto="5432";
            $this->baseDatos="persona";
        }

        public function conectar(){
            try {
                $dsn = "pgsql:host=$this->servidor;port=$this->puerto;dbname=$this->baseDatos";
                $pdo = new PDO($dsn, $this->usuario, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Mostrar errores
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Establecer el modo de fetch a asociativo
                ]);
            
                // echo "Conexión exitosa a PostgreSQL";
            
            } catch (PDOException $e) {
                echo 'Error en f la conexión: ' . $e->getMessage();
            }
            return $pdo;
        }

        public function ejecutar($sql, $valores) {
            $pdo = $this->conectar();
            if (!$pdo) return false; // Retorna false si no hay conexión
    
            $stmt = $pdo->prepare($sql);
            return $stmt->execute($valores); // Retorna true o false según el éxito de la ejecución
        }

        // public function consulta($querySql){
        //     $conexion= $this->conectar();
        //     $consulta= $conexion->query($querySql);
        //     while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
        //         $resultado[]= $fila;
        //     } 
        //     return $resultado;
        // }
        public function consulta($querySql, $valores) {
            $conexion = $this->conectar(); // Conectar a la base de datos
            $stmt = $conexion->prepare($querySql); // Preparar la consulta
            $stmt->execute($valores); // Ejecutar la consulta con los valores
        
            $resultado = []; // Inicializar el array para almacenar resultados
            
            // Obtener los resultados
            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $resultado[] = $fila; // Agregar cada fila al resultado
            }
        
            return $resultado; // Retornar los resultados obtenidos
        }
        
        
        
        public function eliminar($tabla, $condicion, $valores){
            $sql = "DELETE FROM $tabla WHERE $condicion";
            $pdo = $this->conectar();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($valores);
            echo "Registro eliminado correctamente.";
        }

    }


