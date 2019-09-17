<?php
class Computer{
        public function index()  {

    
            include("views/head_v.php");
			include('views/menu_v.php');
			include('views/session_connexion_v.php');
			include("views/foot_v.php");
			

	}


	
	    public function createComputer()  {
			 include("models/classroom_m.php");
			 $classroom = new Classroom_m();
			 $dropDownClassroom=$classroom->dropDownClassroom();
			 
			include("views/head_v.php");
			include('views/menu_v.php');
			include("views/form_computer_v.php");
			include("views/foot_v.php");
        }
		
		public function validFormCreateComputer(){
		  	$errors=array();
	
			$data['name_computer']=htmlspecialchars($_POST['name_computer']); 
			$data['type_computer']=htmlspecialchars($_POST['type_computer']); 
			$data['ram_computer']=htmlspecialchars($_POST['ram_computer']);
			$data['date_buy_computer']=htmlspecialchars($_POST['date_buy_computer']);
				$data['id_classroom']=htmlspecialchars($_POST['id_classroom']);

			if (preg_match("/([^A-Za-z ])/",$data['type_computer'])) $errors['type_computer']=' The name must contain only characters';
	
			if(!is_numeric($data['ram_computer']))$errors['ram_computer']='Enter a number, please !';

			if ($data['type_computer']=="" || $data['name_computer']=="" || $data['ram_computer']==""  || $data['date_buy_computer']=="") {
				$errors['empty_fields'] = "Please, input all fields !";
			}
	     
			if(! empty($errors))
			{
				include("models/classroom_m.php");

				include("views/head_v.php");
				include("views/menu_v.php");
				$computer = new Classroom_m();
				$dropDownClassroom=$computer->dropDownClassroom();
				include("views/form_computer_v.php"); 
				include("views/foot_v.php");
			}
			else
			{
			include("models/computer_m.php");
			$computer = new Computer_m();
			$data=$computer->createComputer($data);
			header("Location: ".BASE_URL."index.php/Computer/readComputers");
		}
        }
		
			    public function readComputers()  {
			include("models/computer_m.php");
			$computer = new Computer_m();
			$readAllComputers=$computer->readAllComputers();
			
			include("views/head_v.php");
			include('views/menu_v.php');
			include("views/table_computer_v.php");
			include("views/foot_v.php");
        }

        	    public function updateComputer($id) {
			include("models/computer_m.php");
			include("models/classroom_m.php");
			$computer = new Computer_m();
			$classroom = new Classroom_m();
			$data=$computer->readComputerById($id);
		    $dropDownClassroom=$classroom->dropDownClassroom();
			
			
	    include("views/head_v.php");
        include("views/menu_v.php");
        include("views/form_computer_v.php"); 
        include("views/foot_v.php");
        }
		
	    public function validFormUpdateComputer()  {
			 $errors=array();
	
			$data['name_computer']=htmlspecialchars($_POST['name_computer']); 
			$data['type_computer']=htmlspecialchars($_POST['type_computer']); 
			$data['ram_computer']=htmlspecialchars($_POST['ram_computer']);
			$data['date_buy_computer']=htmlspecialchars($_POST['date_buy_computer']);
			$data['id_classroom']=htmlspecialchars($_POST['id_classroom']);

			if ((preg_match("/([^A-Za-z ])/",$data['type_computer']))) $errors['type_computer']=' The name must contain only characters';
	
			if(!is_numeric($data['ram_computer']))$errors['ram_computer']='Enter a number, please !';

			if ($data['type_computer']=="" || $data['name_computer']=="" || $data['ram_computer']==""  || $data['date_buy_computer']=="") {
				$errors['empty_fields'] = "Please, input all fields !";
			}
	     
			if(! empty($errors))
			{
				include("models/classroom_m.php");

				include("views/head_v.php");
				include("views/menu_v.php");
				$computer = new Classroom_m();
				$dropDownClassroom=$computer->dropDownClassroom();
				include("views/form_computer_v.php"); 
				include("views/foot_v.php");
			}
			else
			{
				include("models/computer_m.php");
				$computer = new Computer_m();
				$computer->updateComputerById($data['id_computer'], $data);
				header("Location: ".BASE_URL."index.php/Computer/readComputers");
			}
    }

		
	
	  public function deleteComputer($id)  {
	  	include("models/computer_m.php");
		$computer = new Computer_m();
		$computer->deleteComputerById($id);
		header("Location: ".BASE_URL."index.php/Computer/readComputers");
      }
	

		
}