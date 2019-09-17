<?php
//include('connexion_bdd.php');
class Computer_m{
	
	private $db;
	public function __construct(){
		$MaConnexion = new Connexion();
		$this->db = $MaConnexion->connect();
	 }

	function readAllComputers(){
		$req="SELECT *
		          FROM computer as co, classroom as cl
		          WHERE co.id_classroom=cl.id_classroom 
		          ORDER BY co.type_computer";
    	try {
			$select = $this->db->query($req);
			$results = $select->fetchAll();
			return $results;
			} catch ( Exception $e ) {echo "Error method readAllComputers : ", $e->getMessage();}
    }

    function readComputerById($id){
    	$req="SELECT *
		          FROM Computer 
		          WHERE id_Computer=".$id." LIMIT 1;";

    	try {

			$prep=$this->db->prepare($req);
    		$prep->bindParam(':id',$id,PDO::PARAM_INT);
    		$prep->execute();
    		$result = $prep->fetch();
			return $result;
			} catch ( Exception $e ) {echo "Error method readComputerById : ", $e->getMessage();}
    }

    function deleteComputerById($id){
		$req="DELETE FROM Computer WHERE id_Computer=".$id." LIMIT 1;";
    	try {
			$nbRes = $this->db->exec($req);
			return $nbRes;
			} catch ( Exception $e ) {echo "Error methode deleteComputerById : ", $e->getMessage(); }
    }

    function updateComputerById($id, $data){
    	$req="UPDATE Computer 
		          SET type_machine='".$data['type_machine']."' , nom_machine='".$data['nom_machine']."', ram='".$data['ram']."' ,date_achat='".$data['date_achat']."' 
				  WHERE id_Computer=".$id.";";
    	try {
			$nbRes = $this->db->exec($req);
			} catch ( Exception $e ) {echo "Error methode updateComputerById : ", $e->getMessage();}
    }

 	function createComputer($data){
    	$req="INSERT INTO computer VALUES ('', :type_computer, :name_computer,  :ram_computer, :date_buy_computer, :id_classroom)";

    	try {
    		$prep=$this->db->prepare($req);
    	//	$prep->bindParam(':id_computer', $data['id_computer'], PDO::PARAM_INT);
    		$prep->bindParam(':type_computer', $data['type_computer'], PDO::PARAM_STR, 25);
    		$prep->bindParam(':name_computer', $data['name_computer'], PDO::PARAM_STR);
    		$prep->bindParam(':ram_computer', $data['ram_computer'], PDO::PARAM_STR);
    		$prep->bindParam(':date_buy_computer', $data['date_buy_computer'], PDO::PARAM_STR);
    		$prep->bindParam(':id_classroom', $data['id_classroom'], PDO::PARAM_INT);
			$prep->execute();
			//$nbRes = $this->db->exec($req);
			} 
		catch ( Exception $e ) {
				echo "Error method createComputer : ", $e->getMessage();
			}
    }

   
	
}
