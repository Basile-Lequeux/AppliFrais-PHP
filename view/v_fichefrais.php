<div class="container">
<h1>Fiche de frais du visiteur <?php  echo($nomVisiteur['prenom'].' '.$nomVisiteur['nom'])?> du mois de <?php echo($_GET['monthfiche']);?></h1>
  <table class="table table-striped">
  
    <tbody>        
      <td>
        <h1>Frais forfaitisés</h1>
          <form class="well form-horizontal" role="form" method="post" action ="index.php?session=listfiches&action=modif&idfiche=<?php echo($_GET['idfiche'])?>&monthfiche=<?php echo($_GET['monthfiche']) ?>">
            <fieldset>
              <div class="form-group">
                <?php foreach($fichefrais as $data)
                      { 
                      ?>         
                          <label class="col-md-1 control-label"><?php echo($data['libelle']) ?></label>
                          <div class="col-md-2 inputGroupContainer">
                          <div class="input-group">
                          <span class="input-group-addon">
                          <i class="glyphicon glyphicon-asterisk"></i>
                          </span>
                          <input id="frais" name="frais[<?php echo $data['idfrais'] ?>]" value="<?php echo($data['quantite']) ?>" class="form-control" required="true"></div>
                          </div>
                                  
                            <?php     
                              }?>
                </div>
                <div class = "float-right"> 
                <button type="submit" class="btn btn-primary">Actualiser les frais</button>     
                </div>
                </form> 
                
                </fieldset>

               

            </tbody>
            </table>





            <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Date</th>
      <th scope="col">Montant</th>
      <th scope="col">Refuser le frais</th>
  
    </tr>
    </thead>
    <tbody>
    <h1>Frais hors forfait</h1>

                    <?php
                        foreach($horsforfait as $data)
                        { 
                        ?>
                        <tr>                          
                            <td><?php echo($data['libelle']) ?></td>
                            <td><?php echo($data['date']) ?></td>
                            <td><?php echo($data['montant']) ?></td>
                            <th scope="row"><a href = "index.php?session=listfiches&action=delete&idfiche=<?php echo($_GET['idfiche'])?>&monthfiche=<?php echo($_GET['monthfiche'])?>&idhorsforfait=<?php echo($data['id'])?>" style="color:red" class="glyphicon glyphicon-remove"></a></th>
                        </tr>                                                    
                    <?php     
                        }?>


    </table>

</div>