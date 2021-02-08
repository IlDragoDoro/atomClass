 <?php
echo "<center>";
// Creo la clase trabajador
class Trabajador
{

    // Creo los atributos:
    public $nombre = array();
    public $salario = array();

    public function iniciar($nombre,$salario)
    {
        $this->nombre[] = $nombre;
        $this->salario[] = $salario;
    }

    public function mostrar()
    {
        for($i = 0; $i < count($this->nombre);$i++){
            $this->formato($this->nombre[$i], $this->salario[$i]);
        }
        
    }

    public function formato($nombre, $salario)
    {
        
        if ($salario < 3500) {
            echo "El trabajador: " . $nombre . " Con un salario de: " . $salario . " -> No tiene que pagar impuestos.<br>";
        } else {
            echo "El trabajador: " . $nombre . " Con un salario de: " . $salario . " -> Tiene que pagar impuestos.<br>";
        }
    }
}
echo "<h1>Ejercicio 1</h1>";
echo "<hr>";
echo "<h3>Actividad de crear y guardar un trabajador:</h3>";
$trabajador = new Trabajador(); // Creamos un trabajador
$trabajador->iniciar("Drago", 2500);
$trabajador->iniciar("Miquel", 4000);
$trabajador->mostrar();
echo "<hr>";

//-------------------------------------------------------------------------------------------------------------------------------
//Creo una clase navegar:
class Navegar{
    private $enlaces=array();
    private $titulos=array();
//Creo la funcion para guardar las opciones
    public function guardar($enlace,$titulo){
        $this->enlaces[]=$enlace;
        $this->titulos[]=$titulo;
    }
//Creo la funcion para mostrar el menu horizontal    
    public function horizontal(){
        for($i=0;$i<count($this->enlaces);$i++){
           echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>' ;
           echo "_";
        }
    }
//Creo la funcion para mostrar el menu vertical   
    public function vertical(){
        for($i=0;$i<count($this->enlaces);$i++){
            echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>' ;
            echo "<br>";
        }
    }
}

//Creo el objeto menu
$navegar1=new Navegar();
//Guardo los atributos del objeto
$navegar1->guardar("www.google.es","google");
$navegar1->guardar("www.dragonjar.org","DragonJar");
$navegar1->guardar("www.kali.ork","Kali Linux");

//Muestro los dos menus:
echo "<h3>Actividad de crear y ensenyar dos menus:</h3> ";
echo "<h4>Menu vertical:</h4>";
$navegar1->vertical();
echo "<hr>";
echo "<h4>Menu horizontal:</h4>";
$navegar1->horizontal();
echo "<hr>";


class Header{
    public $titulo = "";
    public $posicion = "";
    public $fondo = "";
    public $fuente = "";
    
    public function guardar($titulo,$posicion,$fondo,$fuente){
        $this->titulo=$titulo;
        $this->posicion=$posicion;
        $this->fondo=$fondo;
        $this->fuente=$fuente;    
    }
    //Creo la función para mostrar el header
    public function mostrar(){
        echo '<h2 style="text-align:'.$this->posicion.';background-color:'.$this->fondo.';font-family:'.$this->fuente.';">'.$this->titulo.'</h2>';
    }    
}

echo "<h3>Actividad de crear un header con titulo,fondo,alineacion y fuente:</h3>";
echo "</center>";
//Creo y muestro el header
$header=new Header();
$header->guardar("The Last Excercise","center","blue","arial");
$header->mostrar();
?>
 
