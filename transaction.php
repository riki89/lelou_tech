<html>
  <body>
    <form action="transfert2.php" method="post">
      <pre>
        Numero_compte_Em:  <input type="text" name="numcompte">
        Solde:             <input type="text" name="solde">
        CodeEmetteur:      <input type="text" name="code">
        Numero_compte_Dest:<input type="text" name="numcompte1">
        <input type="submit" name="ok" value="Valider">
      </pre>
    </form>
<?php
//connexion au serveur 
  $user = "root";
  $pass = "";
  try {
    $dbh = new PDO('mysql:host=localhost;dbname=compte', $user, $pass);
    foreach($dbh->query('SELECT * from client') as $row) {
      print_r($row);
      //echo "1".$row;
    }
    $dbh = null;
  } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }
/*  $conn = mysql_connect("localhost","root","");
  if ($conn == null)
    echo "connexion avec succès !!";
  else
    echo "erreur lors de la connexion !!";
//selection de la base de données
  mysql_select_db("compte");
  */

  /*if(isset($_POST["ok"]))
  {
    extract($_POST);
    $a=1;
    $a1=100;
    $rq1="select solde,code from client where numcompte=$numcompte";
    $exerq1=mysql_fetch_array(mysql_query($rq1));
    $rq2="select solde from client where numcompte=$numcompte1";
    $exerq2=mysql_fetch_array(mysql_query($rq2));
    $req1OP="select solde from client where numcompte=$a and code=$a1";
    $exerq1OP=mysql_fetch_array(mysql_query($req1OP));
    if(($exerq1['solde']>=$solde)&&($exerq1['code']==$code))
    {
     $comT=$solde*0.07; //compte transaction
	   $comO=$comT*0.5; //compte Opérateur
	   $comE=$comT*0.2; //compte émeteur
	   $comR=$comT*0.3; //compte récepteur
	   $s1=$solde+$comO+$comR; 
	   $s2=$solde+$comR;
     $op1=$exerq1['solde']-$s1;
     $op2=$exerq2['solde']+$s2;
	   $op3=$exerq1OP['solde']+$comO;
     $rq3="UPDATE client SET solde=$op1 where numcompte=$numcompte";
     $rq4="UPDATE client SET solde=$op2 where numcompte=$numcompte1";
	   $rq5="UPDATE client SET solde=$op3 where numcompte=$a";
     if((mysql_query($rq3))&&(mysql_query($rq4))&&(mysql_query($rq5)))
      {
        echo "modification réussie avec succès !!";
      }
      else
      {
        echo "erreur lors de la modification !!";
      }
   }
}*/

?>
  </body>
</html>
