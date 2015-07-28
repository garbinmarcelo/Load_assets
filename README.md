#Load assets Class (CSS/JS/JS Codes)
---
Classe utilizada para carregar arquivos ou links .css, .js e códigos js dinamicamente no template HTML, obtendo assim uma melhor perfomance no carregamento da aplicação.
Basta apenas informar o diretório dos arquivos (opcional) e o nome do mesmo ou sua URL, esta classe gera código HTML(link/script) para a chamada dos arquivos.

##Métodos
* base_pathCSS();
* base_pathJS();
* CSSLinks();
* JSLinks();
* JSCodes();

##Como Utilizar
#####1 - Instanciar a classe em sua aplicação
######Exemplo:
  <pre><code>
  <?php
    require_once('../Load_assets.php');
    $load = new Load_assets;
  ?>
  </pre></code>

#####2 - Definir as pastas padrões dos arquivos .css e .js. Este procedimento não é obrigatório, caso não efetuar o mesmo, o caminho ao diretório ficará nulo, dessa forma o arquivo será chamado no diretório atual do arquivo em execução.
######Exemplo:
  <pre><code>
  <?php
    $load->base_pathCSS('./assets/css/');
    $load->base_pathJS('./assets/js/');
  ?>
  </pre></code>

#####3 - Definir os arquivos que serão executados. Neste passo é criado um array com todos os arquivos que você deseja carregar em sua aplicação.
*Obs: Não é necessário colocar a extensão do arquivo a ser chamado, apenas seu nome.*
######Exemplo CSSLinks:
  <pre><code>
  <?php
    echo $load->CSSLinks(array('bootstrap.min', 'style'));
  ?>
  </pre></code>

######OU
  <pre><code>
  <?php
    $css = array('bootstrap.min', 'style');
    echo $load->CSSLinks($css); 
  ?>
  </pre></code>

######Exemplo JSLinks:
  <pre><code>
  <?php 
    echo $load->JSLinks(array('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min', 'bootstrap.min')); 
  ?>
  </pre></code>

######OU
  <pre><code>
  <?php 
    $js = array('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min', 'bootstrap.min');  
    echo $load->JSLinks($js); 
  ?>
  </pre></code>

######Exemplo JSCodes:
  <pre><code>
  <?php
      echo $load->JSCodes(array(
        '$(document).ready(function(){
          $("#learn").click(function() {
            alert("Yeap! Load assets Class Work\'s.");
          });
        });'
        ,
        '$(document).ready(function(){
          $(".details").click(function() {
            alert("Yeap! JSCodes Work\'s.");
          });
        });'
      ));  
  ?>
  </pre></code>

*Este projeto possui uma pasta chamada 'exemple' para melhor aprendizado sobre a classe.*

##Criador
Marcelo Garbin  
link:   <a href="https://bitbucket.org/marcelogarbin/load_assets" target="_blank">https://bitbucket.org/marcelogarbin/load_assets</a></li>
