<div class="container">
    <h3>Fiche de frais du mois de <?php echo($_GET['monthfiche'])?>Etat : <?php echo($_GET['etat']) ?></h3>
    <hr>

    <div class="row">
    <div class="col">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Frais forfaitisés</h3>
            </div>
            <table class="table">
                
                <tbody>

                <?php
                      foreach($fraisforfait as $data)
                      { 
                        ?>         
                            <tr>
                        <td><?php echo($data['libelle']) ?></td>
                        <td><?php echo($data['quantite']) ?></td>
               
                    </tr>
                            
                          
                     <?php     
                      }?>
                    
            
                </tbody>
       
            </table>
        </div>
        </div>


    <div class="col">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Frais non forfaitisés</h3>
            </div>
            <table class="table">
                
                <tbody>

                <?php
                      foreach($horsforfait as $data)
                      { 
                        ?>         
                            <tr>
                        <td><?php echo($data['libelle']) ?></td>
                        <td><?php echo($data['montant'].'€') ?></td>
               
                    </tr>
                            
                          
                     <?php     
                      }?>
                    
            
                </tbody>
            </table>
        </div>
    </div>



</div>