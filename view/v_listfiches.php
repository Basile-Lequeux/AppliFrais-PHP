<div class ="container">
<h1>Liste des fiches de frais a valider</h1>
    <table class="table table-sm">
    <thead>
    <tr>

      <th scope="col">nom</th>
      <th scope="col">mois</th>

    </tr>
    </thead>
    <tbody>

                    <?php
                        foreach($fiches as $data)
                        { 
                        ?>
                        <tr>                          
                            <td><?php echo($data['nom'].$data['prenom']) ?></td>
                            <td><?php echo($data['mois']) ?></td>
                            <th><a href ="index.php?session=listfiches&selected=<?php echo($data['idvisiteur'].$data['mois']) ?>" class="glyphicon glyphicon-file"></a></th>
                        </tr>                                                    
                    <?php     
                        }?>


    </table>
</div>