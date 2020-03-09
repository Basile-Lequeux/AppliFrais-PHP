<div class="container">
    <h3>Fiche de frais du mois de <?php echo($_GET['monthfiche'])?> Etat : <?php echo($_GET['etat']) ?></h3>
    <hr>

    <div class="row">
    <div class='container'>
    <div class="col">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Frais forfaitisés</h3>
            </div>
            <table class="table">
                <thead>
                <th>Frais Forfaitaires</th>
                <th>Quantité</th>
                <th>Montant unitaire</th>
                <th>Total</th>

                </thead>
                <tbody>

                <?php
                      foreach($fraisforfait as $data)
                      { 
                          $total += $data['quantite'] * $data['montant'];
                          ?>         
                        
                            <tr>
                        <td><?php echo($data['libelle']) ?></td>
                        <td><?php echo($data['quantite']) ?></td>
                        <td><?php echo($data['montant']) ?></td>
                        <td><?php echo($data['quantite'] * $data['montant']) ?></td>

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
                <thead>
                <th>Date</th>
                <th>Libellé</th>
                <th>Montant</th>
                </thead>
                <tbody>

                <?php
                      foreach($horsforfait as $data)
                      { $total += $data['montant'];
                          ?>         
                    <tr>

                        <td><?php echo(strftime("%d/%m/%G", strtotime($data['date'])))?></td>
                        <td><?php echo($data['libelle']) ?></td>
                        <td><?php echo($data['montant'].'€') ?></td>
                        
               
                    </tr>
                            
                          
                     <?php     
                      }?>
                    
            
                </tbody>
            </table>

        </div>
        <div class="panel panel-success">
        <div class='panel-heading'>
        <h3 class="panel-title">Total remboursement du mois : <?php echo($total) ?>€</h3>
        
        </div>
        </div>
        
        </div>
    </div>



</div>