<?php
// readname.php
// connect dbconnection file
require_once("../includes/config.php");
// hear we search term exist then process the below lines of code
if(!empty($_POST["searchterm"])) 
{
    // the query responsible for fetch matched data
    $sql_query ="SELECT * FROM personne WHERE nom_prenom_pers like '%" . $_POST["searchterm"] . "%' or ville like '%" . $_POST["searchterm"] . "%' or  domaine like '%" . $_POST["searchterm"] . "%' ORDER BY nom_prenom_pers";

    $get_result = mysqli_query($con,$sql_query);
 
        if(!empty($get_result)) {


            // prepare the list for append
        ?>
                <ul id="name-list">
                <?php
                while($name_val = mysqli_fetch_array($get_result,MYSQLI_ASSOC))
				{
                              $src = 'http://localhost/DuoForm/img/personnes/personne'.$name_val["id"].'.png';

                              if (@getimagesize($src)) {
                                    $pic = 'personne'.$name_val["id"].'.png';
                              }
                              else {
                                   $pic = "personne0.png";
                              }
                              
                ?>
					<li
                              style="height: 70px;    margin-top: 10px;
    border-radius: 5px;
    padding: 5px;
    box-shadow: 3px 2px 2px 1px rgb(31 31 255 / 10%);"
                              onClick="selectname('<?php echo $name_val["nom_prenom_pers"]; ?>');">
                              <a href="prendre-rdv.php?pers=<?php echo $name_val["id"]; ?>">
                              <div>
                                    <img style="padding: 5px 0;    float: left;" src="./img/personnes/<?php echo $pic;?>" alt="">
                                    <div style="    float: left;padding: 5px 0;
    margin-top: -20px;
    margin-left: 10px;">
                                          <h2 style="font-size: 20px;
    font-weight: bold;
    font-family: var(--font-family-roboto);"><?php echo $name_val["nom_prenom_pers"]; ?></h2>
                                          <h4 style="font-size: 16px;
    font-weight: normal;
    font-family: var(--font-family-roboto);"><?php echo $name_val["domaine"]; ?></h4>
                              </div>
                              </div>
                        </a>
                              </li>
                <?php 
				} 
				?>
                </ul>
        <?php } 
} 
?>