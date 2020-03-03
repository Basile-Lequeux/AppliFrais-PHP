<div class ="container">
<h1>Vos fiches de frais</h1>
    <table class="table table-sm">
    <thead>
    <tr>
      <th scope="col">Mois de la fiche de frais</th>
      <th scope="col">Veuillez séléctionner une fiche</th>


    </tr>
    </thead>
    <tbody>

                    <?php
                        foreach($monthfiche as $data)
                        { 
                        ?>
                        <tr>                          
                            <td><?php echo($data['mois']) ?></td>
                            <th><a href ="index.php?session=fichefrais&action=show&monthfiche=<?php echo(($data['mois'])) ?>&etat=<?php echo($data['libelle'])?>" class="glyphicon glyphicon-file"></a></th>
                        </tr>                                                    
                    <?php     
                        }?>



    </table>
</div>