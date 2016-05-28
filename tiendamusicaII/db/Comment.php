<?php
/**
 * Copyright 2016 Alejandro Alcalde
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
require_once('DataObject.php');

/**
 * Created by IntelliJ IDEA.
 * User: hkr
 * Date: 5/27/16
 * Time: 5:14 PM
 */
class Comment extends DataObject
{
    protected $datos = array(
        ":id_user" => "",
        ":id_disc" => "",
        ":comment" => "",
    );

    public function insertComment()
    {
        $connection = parent::conectar();
        $sql = 'INSERT INTO ' . COMMENT_TABLE . ' 
            (id_usuario, id_disco, comentario, fecha)
            VALUES (:id_user, :id_disc, :comment, now())';

        try {
            $st = $connection->prepare($sql);
            $result = $st->execute($this->datos);
        } catch (PDOException $e) {
            die("Consulta fallida: " . $e->getMessage());
        }
        parent::desconectar($connection);

        return $result;
    }

    public function getAllCommentsForDisc($disc)
    {

//        // compare if the value from $lastAccess15 is +15min in relation to the current time
//        $lastAccess15 = '2012-06-01 00:00:00';
//
//        $phpDateFromMysql = strtotime( $lastAccess15 );
//
//        if ($phpDateFromMysql - $lastAccess15 > 900) {
//            $lastAccess15 = date('Y-m-d H:i:s', time());
//        }
//
//        echo $lastAccess15;

        $connection = parent::conectar();
        $sql = "SELECT Usuario.nombre, comentarios.fecha, comentarios.comentario FROM " . COMMENT_TABLE . " INNER JOIN Usuario ON (Usuario.dni = comentarios.id_usuario) WHERE id_disco = :disco ORDER BY comentarios.fecha DESC";

        try {
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(":disco", $disc);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}