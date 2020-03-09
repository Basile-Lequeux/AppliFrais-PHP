<div class ="container">
<h1>Liste des fiches de frais validées</h1>
    <table class="table table-sm">
    <thead>
    <tr>

      <th scope="col">Visiteur</th>
      <th scope="col">mois</th>

    </tr>
    </thead>
    <tbody>

                    <?php
                        foreach($fiches as $data)
                        { 
                        ?>
                        <tr>                          
                            <td><?php echo($data['nom'].' '.$data['prenom']) ?></td>
                            <td><?php echo($data['mois']) ?></td>
                            <th><a href ="index.php?session=paiement&idfiche=<?php echo($data['idvisiteur'])?>&monthfiche=<?php echo($data['mois'])?>&action=fiche" class="glyphicon glyphicon-file"></a></th>
                        </tr>                                                    
                    <?php     
                        }?>



    </table>
</div>