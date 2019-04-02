<?PHP
include "../config.php";
class panierproduitC {
function afficherPanierProduit ($panierproduit){
		echo "ID_pp: ".$panierproduit->getId_pp()."<br>";
		echo "ID_produit: ".$panierproduit->getId_produit()."<br>";
		echo "éid_produit: ".$panierproduit->getQuantite()."<br>";
		echo "id_panier ".$panierproduit->getId_panier()."<br>";
	}

	function ajouterpanierproduit($panierproduit){
		$sql="insert into panierproduit (id_produit,quantite, id_panier) values ( :id_produit,:quantite,:id_panier)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_produit=$panierproduit->getid_produit();
        $quantite=$panierproduit->getQuantite();
        $id_panier=$panierproduit->getId_panier();

		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':quantite',$quantite);	
		$req->bindValue(':id_panier',$id_panier);	
		echo "hiii";
           $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpanierproduits(){
		
		$sql="SElECT * From panierproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpanierproduit($id_pp){
		$sql="DELETE FROM panierproduit where id_produit= :id_pp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_pp',$id_pp);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function clearpanierproduit(){
		$sql="DELETE FROM panierproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpanierproduit($panierproduit,$id_pp){
        $sql="UPDATE panierproduit SET quantite=:quantite WHERE id_produit=:id_produit";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		echo $id_pp;
        $req=$db->prepare($sql);
		
        $quantite=$panierproduit->getQuantite();	
		$req->bindValue(':id_produit',$id_pp);
		$req->bindValue(':quantite',$quantite);		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpanierproduit($id_pp){
		$sql="SELECT * from panierproduit where id_pp=$id_pp";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepanierproduits($tarif){
		$sql="SELECT * from panierproduit where id_panier=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>