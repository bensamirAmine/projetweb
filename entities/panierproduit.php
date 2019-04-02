<?PHP
class panierproduit{
	private $id_pp;
	private $id_produit;
	private $quantite;
	private $id_panier;

	function __construct($id_pp,$id_produit,$quantite,$id_panier){
		$this->id_pp=$id_pp;
		$this->id_produit=$id_produit;
		$this->quantite=$quantite;
		$this->id_panier=$id_panier;
	}
	
	function getId_pp(){
		return $this->id_pp;
	}
	function getId_produit(){
		return $this->id_produit;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getId_panier(){
		return $this->id_panier;
	}
	

	function setId_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setQuantite($quantite){
		$this->quantite;
	}
	function setId_panier($id_panier){
		$this->id_panier=$id_panier;
	}
	function setId_pp($id_pp){
		$this->id_pp=$id_pp;
	}
	
}

?>