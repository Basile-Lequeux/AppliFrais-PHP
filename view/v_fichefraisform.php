<!-- LIGNE FRAIS FORFAIT -->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td>
                <h1>Ajouter vos frais forfaitisés</h1>
                   <form class="well form-horizontal" role="form" method="post" action ="index.php?session=fichefraisform&action=submitform">

                      <fieldset>
                               
                      <div class="form-group">
               
                      <?php
                      foreach($fraisforfait as $data)
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
                          <button type="submit" class="btn btn-primary">Soumettre</button>     
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
       </div>






       <!-- LIGNE HORS FORFAIT -->


       <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                <h1>Ajouter un frais non forfaitisé</h1>
                   <form class="well form-horizontal" role="form" method="post" action ="index.php?session=fichefraisform&action=newhorsforfait">
                      <fieldset>  
                      <div class="form-group">

                      <label class="col-md-1 control-label">date</label>
                      <div class="col-md-2 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon">
                      <i class="glyphicon glyphicon-asterisk"></i>
                      </span>
                      <input type="date" id="frais" name="date" required="true">
                      </div>
                      </div>

                      <label class="col-md-1 control-label">libéllé</label>
                      <div class="col-md-2 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon">
                      <i class="glyphicon glyphicon-asterisk"></i>
                      </span>
                      <input id="frais" name="wording" class="form-control" required="true">
                      </div>
                      </div>

                      <label class="col-md-1 control-label">montant</label>
                      <div class="col-md-2 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon">
                      <i class="glyphicon glyphicon-asterisk"></i>
                      </span>
                      <input id="frais" name="amount" class="form-control" required="true">
                      </div>
                      </div>

                      <button type="submit" class="btn btn-primary">Soumettre</button>

                      </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
          </table>
          </div>
          
         






