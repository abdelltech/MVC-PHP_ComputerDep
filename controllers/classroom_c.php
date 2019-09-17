<?php
class Classroom{

        public function index()  {
            include("views/head_v.php");
			include('views/menu_v.php');
			include("views/foot_v.php");
	}


	   public function createClassroom()  {
			include("views/head_v.php");
			include('views/menu_v.php');
			include("views/form_classroom_v.php");
			include("views/foot_v.php");
        }
		
		public function validFormCreateClassroom(){
		  //  $id=htmlspecialchars($_POST['id_classroom']); 
				$errors=array();
			$data['name_classroom']=htmlspecialchars($_POST['name_classroom']);


			if ($data['name_classroom'] == "") {
				$errors['name_classroom']='input the field, please !';
			}
			if ( preg_match("/([^A-Za-z ])/", $data['name_classroom'])){
			 $errors['name_classroom']='The classroom must contain only characters';
			}

			if(!empty($errors))
			{include("views/head_v.php");
			include('views/menu_v.php');
			include("views/form_classroom_v.php");
			include("views/foot_v.php");

		//	$this->createClassroom();
			}else{
				include("models/classroom_m.php");
			$classroom = new Classroom_m();
			$data=$classroom->createClassroom($data);
			header("Location: ".BASE_URL."index.php/Classroom/readClassrooms");
			}

			
        }
		

	    public function readClassrooms()  {
			include("models/classroom_m.php");
			$classroom = new Classroom_m();
			$readAllClassrooms=$classroom->readAllClassrooms();
		
			include("views/head_v.php");
			include('views/menu_v.php');
			include("views/table_classroom_v.php");
			include("views/foot_v.php");
        }




		

	
	    public function updateClassroom($id) {
			include("models/classroom_m.php");
			$classroom = new Classroom_m();
			$data=$classroom->readClassroomById($id);
		 
			
			
	    include("views/head_v.php");
        include("views/menu_v.php");
        include("views/form_classroom_v.php"); 
        include("views/foot_v.php");
        }


	    public function validFormUpdateClassroom()  {
			$errors=array();
			$data['id_classroom']=htmlspecialchars($_POST['id_classroom']);
			
			$data['name_classroom']=htmlspecialchars($_POST['name_classroom']);
			if ($data['name_classroom'] == "") {
				$errors['name_classroom']='input the field, please !';
			}
			if ((preg_match("/([^A-Za-z ])/", $data['name_classroom']))) $errors['name_classroom']='The classroom must contain only characters';
			
			if(!empty($errors))
			{
				
		 
			
			
	    include("views/head_v.php");
        include("views/menu_v.php");
        include("views/form_classroom_v.php"); 
        include("views/foot_v.php");
			}
			else
			{  echo $data['id_classroom'];
		       echo $data['name_classroom'];
				include("models/classroom_m.php");
				$classroom = new Classroom_m();
				$classroom->updateClassroomById($data);
				header("Location: ".BASE_URL."index.php/Classroom/readClassrooms");
			}
    }
	

	
	  public function deleteClassroom($id)  {
	  	include("models/classroom_m.php");
		$classroom = new Classroom_m();
		$classroom->deleteClassroomById($id);
		header("Location: ".BASE_URL."index.php/Classroom/readClassrooms");
      }
	
		
}