<?php
class Paginas extends Controller{
     public function index(){
          $dados = ['titulo'=>'3º Ano Vespertino',
                    'descricao'=>'Aula de PHP com MVC Orientado a Objetos'
                   ];
          $this->view('paginas/home', $dados);
          }//fim do método index

     public function sobre(){
          $dados = ['titulo'=>'Página Sobre',
          'descricao'=>'3º Ano Vespertino Aula de PHP.'
         ];
          $this->view('paginas/sobre', $dados);
      }// fim do método sobre
}//fim da classe


