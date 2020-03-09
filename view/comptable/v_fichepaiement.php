<div class="container">
    <h3>Fiche de frais du mois de <?php echo($_GET['monthfiche'])?> du visiteur <?php echo($nomVisiteur['prenom'].' '.$nomVisiteur['nom']) ?></h3>
    <hr>

    <div class="row">
    <div class="container">
    <div class="col">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Frais forfaitisés</h3>
            </div>
            <table class="table">
                
                <tbody>

                <?php
                      foreach($fichefrais as $data)
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
    
        <div class="pull-right">
        <a class="btn btn-success" href="index.php?session=paiement&action=paiement&idfiche=<?php 
        echo($_GET['idfiche'])?>&monthfiche=<?php echo($_GET['monthfiche'])?>" role="button">Mettre en paiement</a>
        </div>
    </div>
      
</div>

</div>