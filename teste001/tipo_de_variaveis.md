#  tipos
. tipo       exemplo
. string     'pode ser assim' ou "ou assim"
. inter      1234
. boolean    true / false / 0 / 1
. float      3.14151
. array      $nomes = []; -> atual / ou assim $nomes = array(); -> antigo 
. object     $varObj = new stdClass;

. resource   mysql_connect(), mysql_query
             pg_connect(), pq_query()

. mix        gettype($varName)
             function echoVar($varName)
             {
                 echo($varName);
             }

. callback   call_user_func()

.NULL        $varName = null;

# erro comuns

. não iniciar com Números           $123nomeDaVar // errado
. não usar spaços                   $nome da var  // errado
. não usar caractesres especiais
.   ~{}[];.<>\                      $nomeDa@minha#Var
. deve ter menos de 15 caractesre   $nminhavariavelemuitograndeNaoTaLwgalEsteNome
. o nome deve fazer sentido         $xyz = 'Nome de uma pessoa' - não faz sentido 


