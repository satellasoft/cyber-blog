<?php

namespace App\Core;

class Router
{
    //Todos os parâmetros da nossa URL em Array
    private array $uriData;

    //Qual a controladora a ser executada
    private string $controller;

    //Qual método a ser chamado
    private string $method;

    public function __construct()
    {
        //Controladora padrão, ex: HomeController
        $this->controller = 'home';

        //Método padão, ex: index()
        $this->method     = 'index';

        //Chama o método para formatar as propriedades
        $this->format();

        //Executamos e chamamos o nosso método
        $this->run();
    }

    /**
     * Recebe os dados da URI, formata e devolve na propriedade $uriData
     *
     * @return void
     */
    private function format()
    {
        $uri = $_SERVER['REQUEST_URI'];

        if (strpos($uri, '?') > 0)
            $uri = substr($uri, 0, strpos($uri, '?'));
        
        $ex = explode('/', $uri);
     
        if (!is_array($ex))
            return;

        $ex = array_values(array_filter($ex));

        for ($i = 0; $i < REMOVE_INDEX; $i++)
            unset($ex[$i]);

        $this->uriData = array_values($ex);
    }
    
    /**
     * Chama a controller, method e envia os parâmetros para a rota correta
     *
     * @return void
     */
    private function run()
    {
        $controller = $this->getController();

        $method = $this->getMethod($controller);

        $params = $this->getParams();

        call_user_func_array([
            (new $controller),
            $method
        ], $params);
    }
    
    /**
     * Obtém qual controller deve ser executada
     *
     * @return string
     */
    public function getController() : string
    {
        if (isset($this->uriData[0])) {
            $cont = $this->uriData[0];

            $cont = 'App\\Site\\Controller\\' . ucfirst($cont) . 'Controller';

            if (class_exists($cont))
                return $cont;
        }

        return 'App\\Site\\Controller\\' . ucfirst($this->controller) . 'Controller';
    }
    
    /**
     * Obtém qual método deve ser executtado
     *
     * @param  string $controllerPath Endereço da controladora
     * @return string
     */
    public function getMethod(string $controllerPath) : string
    {
        $meth = $this->method; //index

        if (isset($this->uriData[1])) //Se tiver algo na url, entra no if
            $meth = $this->uriData[1]; //Agora math recebe o que está url

        if (method_exists($controllerPath, $meth)) //O método da URL existe? 
            return $meth; //Se tiver, então retorna o meth pq está certp

        return $this->method; //Retorna o nosso index
    }
    
    /**
     * Obtém os parâmetros necessários para serem passados para o método
     *
     * @return array Retorna a lista de métodos ou um array vazio caso não exista parâmetro
     */
    public function getParams() : array
    {
        if (count($this->uriData) <= 2)
            return [];

        $params = [];

        for($i = 2; $i < count($this->uriData); $i++){
            $params[] = $this->uriData[$i];
        }

        return $params;
    }
}
