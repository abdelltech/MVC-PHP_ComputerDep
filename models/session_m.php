<?php
class Session_m{
	public $db = NULL; 
	public function __construct(){
		$this->db= Connexion::connect();
    }
    function verif_login_pw($login, $pw){
		$requete="SELECT *
		          FROM manager
		          WHERE pwAdmin='$pw' 
		          AND loginAdmin='$login'";
		$select = $this->db->query($requete);
		//$select->setFetchMode(PDO::FETCH_ASSOC);
		if($select->rowCount()==1){
			$enregistrements = $select->fetch();
			return $enregistrements;
		}
		else{
			return false;
		}
    }    
    
}
