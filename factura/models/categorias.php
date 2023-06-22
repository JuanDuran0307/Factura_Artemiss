<?php

class Categoria extends Conectar{

    public function get_categoria(){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar-> prepare("SELECT * FROM categorias ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);


    }
    public function get_categoria_id($CategoriaID){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar->prepare(("SELECT * FROM categorias WHERE categoriaID =?"));
        $stm->bindValue(1,$CategoriaID);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
    public function insert_categoria($CategoriaID,$categoriaNombre,$Descripcion,$Imagen,){
        $conectar=parent::Conectar();
        parent::set_name();
        $stm="INSERT INTO categorias(CategoriaID,CategoriaNombre,Descripcion,Imagen) VALUES(?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$CategoriaID);
        $stm->bindValue(2,$categoriaNombre);
        $stm->bindValue(3,$Descripcion);
        $stm->bindValue(4,$Imagen);

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}
?>