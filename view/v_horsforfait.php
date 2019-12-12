<div class ="container">
<h1>Vos frais hors forfait</h1>
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Date</th>
      <th scope="col">Montant</th>
    </tr>
    </thead>
    <tbody>

                    <?php
                        foreach($horsforfait as $data)
                        { 
                        ?>
                        <tr>
                            
                            <td><?php echo($data['libelle']) ?></td>
                            <td><?php echo($data['date']) ?></td>
                            <td><?php echo($data['montant']) ?></td>
                            <th scope="row"><a  href ="index.php?session=fichefraisform&action=delete" background-colour="red" style="color:red" class="glyphicon glyphicon-remove"></a></th>
                        </tr>                                                    
                    <?php     
                        }?>


    </table>
</div>