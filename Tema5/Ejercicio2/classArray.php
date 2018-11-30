<?php
/*Añadid un contador de elementos, un método para fusionar nuestro array con otro e intentad tratar el
 * array como una pila, de manera que tengamos ordenados los elementos según el momento de creación.
 */ 

class manejoArray
{

    private $data;
    private $contador;
    private $error;

  
    // Creamos el array
    function __construct()
    {
        $this->data=array();
    }

    // Podríamos declarar el --set como añadir elemento
    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    // Busca si existe un elemento del array
    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

    public function __unset($key) //Para quitar un elemento de un array. 
    {
        unset($this->data[$key]);
        $this->contador--;
    }
//Devuelve $data
    public function getArray()
    {
        return $this->data;
        
    }
    
    
    public function add($value, $key = NULL)
    {
        if (is_null($key)){
            $this->data[] = $value;
            $this->contador++;
        }else{
            $this->data[$key] = $value;
    }
    
    }
    
    
    public function unirArray($array2){
        
        if(is_array($array2)){
            $this->data=array_merge($this->data,$array2);
            return $this->data;
        }else{
            return $this->data;
        
    }
}

}

// Instanciamos objeto
$objArray = new manejoArray();

$array2=new manejoArray();

// Añadimos elemento con __get
$objArray->a = 1;
$objArray->b = 1;
$objArray->c = 1;
echo "</br>";

//añadirmos elementos al array2 con _get

$array2->a = 2;
$array2->b = 2;
echo "</br>";

// Vemos si existe un elemnto. Tiene que dar como resultado true
var_dump(isset($objArray->a));
echo "</br>";

// Eliminamos un elemento
unset($objArray->a);
echo "</br>";

// Vemos si existe un elemnto. Tiene que dar como resultado false
var_dump(isset($objArray->a));
echo "</br>";

//Añadimos dos elemento sin key
$objArray->add("Hola");
$objArray->add("Adios");
$objArray->add("Adios","indice");
print_r($objArray);

//Sacamos el array
echo "</br>";
$array=$objArray->getArray();
print_r($array);

//Unimos los dos arrays

echo "</br>";
$array=$array2->unirArray($objArray->getArray());
print_r($array);


?>