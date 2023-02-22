<?php

namespace Sts\Models;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
    die("Erro: Pagina nao encontrada");
}

class StsHome 
{
    private array $data;
    private object $connection;

    public function index(): array  
    {
        // $this->data = [ 
        //     "title" => "Topo da pagina",
        //     "description" => "Descrição da pagina"
        // ];

        $connection = new \Sts\Models\helper\StsConn();
        $this->connection = $connection->connectDb();

        $query_home_top = "SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_top LIMIT 1";
        $result_home_top = $this->connection->prepare($query_home_top);
        $result_home_top->execute();
        $this->data = $result_home_top->fetch();
        
        return $this->data;
    }
}