<?PHP
class panierproduit{
	private $id_panier;
	private $id_user;
	private $date_creation;
	private $etat;

	function __construct($id_panier,$id_user,$date_creation,$etat){
		$this->id_panier=$id_panier;
		$this->id_user=$id_user;
		$this->date_creation=$date_creation;
		$this->=$etat;
	}
	
	function getid_panier(){
		return $this->id_panier;
	}
	function getid_user(){
		return $this->id_user;
	}
	function getdate_creation(){
		return $this->date_creation;
	}
	function getetat(){
		return $this->etat;
	}
	

	function setid_user($id_user){
		$this->id_user=$id_user;
	}
	function setdate_creation($date_creation){
		$this->date_creation;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setid_panier($id_panier){
		$this->id_panier=$id_panier;
	}
	
}

?>