<?php
//include('connexion_bdd.php');
class Classroom_m{
	
	private $db;
	public function __construct(){
		$MaConnexion = new Connexion();
		$this->db = $MaConnexion->connect();
	 }


	  	function createClassroom($data){
    	$req="INSERT INTO classroom VALUES ('', :name_classroom)";

    	try {
    		$prep=$this->db->prepare($req);
    	//	$prep->bindParam(':id_Classroom', $data['id_Classroom'], PDO::PARAM_INT);
    		$prep->bindParam(':name_classroom', $data['name_classroom'], PDO::PARAM_STR, 25);
			$prep->execute();
			
			} 
		catch ( Exception $e ) {
				echo "Error method createClassroom : ", $e->getMessage();
			}
    }


	function readAllClassrooms(){
		$req="SELECT *
		          FROM classroom
		          ORDER BY name_classroom;";
    	try {
			$select = $this->db->query($req);
			$results = $select->fetchAll();
			return $results;
			} catch ( Exception $e ) {echo "Error method getAllClassrooms : ", $e->getMessage();}
    }

        function readClassroomById($id){
    	$req="SELECT *
		          FROM classroom 
		          WHERE id_classroom=$id";

    	try {

			$prep=$this->db->prepare($req);
    		$prep->bindParam(':id', $id, PDO::PARAM_INT);
    		$prep->execute();
    		$result = $prep->fetch();
			return $result;
			} catch ( Exception $e ) {echo "Error method readClassroomById : ", $e->getMessage();}
    }


     function dropDownClassroom(){
    	$req="SELECT *
		          FROM classroom 
				  ORDER BY id_classroom;";
    	try {
			$select = $this->db->query($req);
			$result = $select->fetchAll();
			} catch ( Exception $e ) {echo "Error method dropDownTypeClassroom : ", $e->getMessage();}
    	$list_dropDown = [];
        if(count($result) > 0){
            $list_dropDown[''] = 'Select classroom';
        	foreach($result as $row){ $list_dropDown[$row['id_classroom']] = $row['name_classroom']; }
    	}
    	return $list_dropDown;
    }


    function updateClassroomById($data){
    	echo $classroom = $data['name_classroom'];
    	echo $id= $data['id_classroom'];
    	$req="UPDATE classroom 
		      SET name_classroom='".$classroom."'
			  WHERE id_classroom='".$id."'";
    	try {
			$nbRes = $this->db->exec($req);
		} catch ( Exception $e ) {echo "Error methode updateClassroomById : ", $e->getMessage();}
    }
	

	    function deleteClassroomById($id){
		$req="DELETE FROM classroom WHERE id_classroom=$id";
    	try {
			$nbRes = $this->db->exec($req);
			return $nbRes;
			} catch ( Exception $e ) {echo "Error method deleteClassroomById : ", $e->getMessage(); }
    }
	
}
