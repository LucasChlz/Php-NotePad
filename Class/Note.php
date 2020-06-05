<?php

class Note
{
    public function createNote($title,$message)
    {
        if($title == "" || $message == "")
        {
            General::jsAlert("fill all fields");
        }else
        {
            $date = date('Y-m-d H:i:s');

            $sql = Sql::connect()->prepare("INSERT INTO `tb_notes` VALUES(null,?,?,?) ");
            if($sql->execute(array($title,$date,$message)))
            {
                General::jsAlert("note sucessfully created");
            }else
            {
                General::jsAlert("error");
            }
        }
    }

    public function listNotes($fetchAll,$fetch,$query)
    {
        if($fetchAll)
        {
            $sql = Sql::connect()->prepare("SELECT * FROM `tb_notes`");
            $sql->execute();
            return $sql->fetchAll();            
        }else if($fetch)
        {
            $sql = Sql::connect()->prepare("SELECT * FROM `tb_notes`");
            $sql->execute();
            return $sql->fetch();            
        }else if($query)
        {
            $param = $_GET['id'];
            $sql = Sql::connect()->prepare("SELECT * FROM `tb_notes` $query");
            $sql->execute(array($param));

            return $sql->fetch();
        }
    }

    public function deleteNote()
    {
        if(isset($_GET['delete']))
        {
            $idDel = $_GET['delete'];

            $sql = Sql::connect()->prepare("DELETE FROM `tb_notes` WHERE id = ?");
            if($sql->execute(array($idDel)))
            {
                header('Location: '.URL_PATH);
                die();
            }
        }
    }

    public function editNote($title,$message)
    {

        if($title == "" || $message == "")
        {
            General::jsAlert("fill all fields");
        }else
        {
            $id = $_GET['id'];
            $date = date('Y-m-d H:i:s');
    
            $sql = Sql::connect()->prepare("UPDATE `tb_notes` SET title = ?, date = ?, note = ? WHERE id = ?");
            if($sql->execute(array($title,$date,$message,$id)))
            {
                General::jsAlert("Edit successfully");
            }
        }
    }

}