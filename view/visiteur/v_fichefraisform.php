<!-- LIGNE FRAIS FORFAIT -->
<div class="container">
       <table class="table table-striped">
          <tbody>
            <form class="well form-horizontal" role="form" method="post" action ="index.php?session=fichefraisform&action=submitform">
                <td>
                <h1>Ajouter vos frais forfaitisés</h1>
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
                      </fieldset>
                      <div class='pull-right'>
                      <button type="submit" class="btn btn-primary">Soumettre</button>     
                      </div>
                   </form>
                </td>
          </tbody>
       </table>
       </div>


       <!-- LIGNE HORS FORFAIT -->

       <div class="container">
       <table class="table table-striped">
          <tbody>
                  <form class="well form-horizontal" role="form" method="post" action ="index.php?session=fichefraisform&action=newhorsforfait">
                <td>
                <h1>Ajouter un frais non forfaitisé</h1>
                      <fieldset>  
                      <div class="form-group">

                     
                      <label class="col-md-1 control-label">date</label>
                   
                      <input type="date" id="frais" name="date" required="true" class="form-control">
                     </div>
                      

                     <div class="form-group">
                      <label class="col-md-1 control-label">libéllé</label>
                      <input id="frais" name="wording" class="form-control" required="true">
                     </div>

                     <div class="form-group">
                      <label class="col-md-1 control-label">montant</label>
                      <input id="frais" name="amount" class="form-control" required="true">
                      </div>

 
              
                      </fieldset>
                      <div class='pull-right'>
                      <button type="submit" class="btn btn-primary">Soumettre</button>
                      </div>
                   </form>
                </td>
          </tbody>
          </table>
          </div>
          
         






