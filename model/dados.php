<?php
require_once 'conexao.php';
class Dados{

  public function insertDados($nome,$matricula,$email,$telefone,$pedido)
  {
    $con=new Conexao;
    $con->MontarConexao();
    $verifica=$con->pdo->query("SELECT * from  cliente c where c.email='$email' or c.matricula='$matricula'");
    $verifica=$verifica->fetchAll(PDO::FETCH_ASSOC);
          if(count($verifica)==0){
          $ap=$con->pdo->prepare("INSERT Into cliente (nome,matricula,email,telefone) values(:nome,:matricula,:email,:telefone)");
          $ap->bindValue(':nome',$nome);
          $ap->bindValue(':matricula',$matricula);
          $ap->bindValue(':email',$email);
          $ap->bindValue(':telefone',$telefone);
                    if($ap->execute()){
                      $id=$con->pdo->query("SELECT * from  cliente c where c.email='$email' or c.matricula='$matricula'");
                      $id=$id->fetchAll(PDO::FETCH_ASSOC);
                      $ap=$con->pdo->prepare("INSERT Into pedidos set descricao=:email, cliente=:cliente,produto=:produto,status=:status");
                        $ap->bindValue(':email',$email);
                        $ap->bindValue(':cliente',$id[0]['codigo']);
                        $ap->bindValue(':produto',$pedido);
                        $ap->bindValue(':status','aberto');
                              if($ap->execute()){
                                return true;
                              }
                      
                    }else{

                    return false;
                    }
            }else{
              return false;
            }

  }  

  public function verificaDados($matricula,$email)
  {
    $con=new Conexao;
    $con->MontarConexao();
    $ap=$con->pdo->query("SELECT * FROM cliente where matricula='$matricula' or email='$email'");
    $dados=$ap->fetchAll(PDO::FETCH_ASSOC);

    if(count($dados)>0){
      return $dados;
    }
    else{
      return 0;
    }   

  } 

    

  public function getAllDados()
  {
    $con=new Conexao;
    $con->MontarConexao();
    $ap=$con->pdo->query("SELECT * FROM pedidos");
    $dados=$ap->fetchAll(PDO::FETCH_ASSOC);

    if(count($dados)>0){
      return $dados;
    }
    else{
      return 0;
    }   

  } 

  public function buscaDados($params)
  {
    $con=new Conexao;
    $con->MontarConexao();
    $ap=$con->pdo->query("SELECT * FROM pedidos p INNER JOIN cliente c on p.cliente=c.codigo INNER JOIN produto pro on pro.codigo=p.produto  where p.status='$params'");
    $dados=$ap->fetchAll(PDO::FETCH_ASSOC);

    if(count($dados)>0){
      return $dados;
    }
    else{
      return 0;
    }   

  }
  
  public function buscatexto($status,$texto)
  {
    $con=new Conexao;
    $con->MontarConexao();
    $ap=$con->pdo->query("SELECT * FROM pedidos p INNER JOIN cliente c on p.cliente=c.codigo INNER JOIN produto pro on pro.codigo=p.produto  where p.status='$status' and (c.nome like '%$texto%' or pro.descricao LIKE '%$texto%');");
    $dados=$ap->fetchAll(PDO::FETCH_ASSOC);

    if(count($dados)>0){
      return $dados;
    }
    else{
      return 0;
    }   

  }




}


?>