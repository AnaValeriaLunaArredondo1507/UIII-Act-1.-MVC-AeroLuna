<?php
class vuelos
{
	private $pdo;
    
    public $ID;
    public $num_vuelo;
    public $hora_salida;
    public $fecha_salida;
    public $hora_llegada;
    public $cant_pasajeros;
	public $horas_de_vuelo;
    public $lugar_salida;
    public $destino;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM vuelos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($ID)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM vuelos WHERE ID = ?");
			          

			$stm->execute(array($ID));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($ID)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM vuelos WHERE ID = ?");			          

			$stm->execute(array($ID));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE vuelos SET 
						num_vuelo          = ?, 
						hora_salida        = ?,
                        fecha_salida        = ?,
						hora_llegada            = ?, 
						cant_pasajeros		 = ?,
						horas_de_vuelo            = ?, 
						lugar_salida		 = ?, 
						destino 		= ?

				    WHERE ID = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->num_vuelo, 
                        $data->hora_salida,
                        $data->fecha_salida,
                        $data->hora_llegada,
                        $data->cant_pasajeros,
						$data->horas_de_vuelo,
                        $data->lugar_salida,
                        $data->destino,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `vuelos` (num_vuelo,hora_salida,fecha_salida,hora_llegada,cant_pasajeros,horas_de_vuelo,lugar_salida,destino) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->num_vuelo, 
                    $data->hora_salida,
                    $data->fecha_salida,
                    $data->hora_llegada,
                    $data->cant_pasajeros,
                    $data->horas_de_vuelo,
                    $data->lugar_salida,
                    $data->destino                     
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
