<?PHP
include "../config.php";
class panierC {
function afficherpanier ($panier){
		echo "id_panier: ".$panier->getid_panier()."<br>";
		echo "id_user: ".$panier->getid_user()."<br>";
		echo "id_user: ".$panier->getdate_creation()."<br>";
		echo "etat ".$panier->getetat()."<br>";
	}

	function ajouterpanier($panier){
		$sql="insert into panier (id_user,date_creation) values ( :id_user,:date_creation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_user=$panier->getid_user();
        $date_creation=$panier->getdate_creation();
        $tarif=$panier->getetat();

		$req->bindValue(':id_user',$id_user);
		$req->bindValue(':date_creation',$date_creation);	
           $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpaniers(){
		
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpanier($id_panier){
		$sql="DELETE FROM panier where id_panier= :id_panier";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_panier',$id_panier);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpanier($panier,$id_panier){
		$sql="UPDATE panier SET id_panier=:id_paniern, id_user=:id_user,date_creation=:date_creation,nbHeures=:nbH,etat=:tarifH WHERE id_panier=:id_panier";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_paniern=$panier->getid_panier();
        $id_user=$panier->getid_user();
        $date_creation=$panier->getdate_creation();
        $nb=$panier->getNbHeures();
        $tarif=$panier->getetat();
		$datas = array(':id_paniern'=>$id_paniern, ':id_panier'=>$id_panier, ':id_user'=>$id_user,':date_creation'=>$date_creation,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':id_paniern',$id_paniern);
		$req->bindValue(':id_panier',$id_panier);
		$req->bindValue(':id_user',$id_user);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpanier($id_panier){
		$sql="SELECT * from panier where id_panier=$id_panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepaniers($tarif){
		$sql="SELECT * from panier where etat=$tarif";
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