<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" role="form" method="post" action ="index.php?session=fichefraisform&action=submitform">
                      <fieldset>  
                      <div class="form-group">
                      <?php
                      foreach($fraisforfait as $data)
                      { 
                        ?>
                        
                      
                            <label class="col-md-4 control-label"><?php echo($data['libelle']) ?></label>
                            <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-asterisk"></i>
                            </span>
                            <input id="frais" name="frais[<?php echo $data['idfrais'] ?>]" value="<?php echo($data['quantite']) ?>" class="form-control" required="true"></div>
                            </div>
                          
                     <?php     
                      }?>
                      <div class="col-md-8 inputGroupContainer">
                      <button type="submit" class="btn btn-primary">Soumettre</button>
                      </div>
                      
                         </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>