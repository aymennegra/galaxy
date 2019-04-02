<?PHP
class livraison{
	private $idclient;
	private $nom;
	private $adresse;
	private $numtel;
	private $numcommande;
	private $liv;
	function __construct($idclient,$nom,$adresse,$numtel,$numcommande,$liv){
		$this->idclient=$idclient;
		$this->nom=$nom;
		$this->adresse=$adresse;
		$this->numtel=$numtel;
		$this->numcommande=$numcommande;
		$this->liv=$liv;
	}
	
	function getidclient(){
		return $this->idclient;
	}
	function getnom(){
		return $this->nom;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getnumtel(){
		return $this->numtel;
	}
	function getnumcommande(){
		return $this->numcommande;
	}
	function getliv(){
		return $this->liv;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setadresse($adresse){
		$this->adresse;
	}
	function setnumtel($numtel){
		$this->numtel;
	}
	function setnumcommande($numcommande){
		$this->numcommande;
	}
	
}

?>