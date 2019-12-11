<div class="container py-3">
  <div class="row py-3">
    
    <div class="col-lg-7 mx-auto">
    
      <div class="card rounded shadow border-0">
     
        <div class="card-body p-3 bg-white rounded">
         <h1>Vos frais forfaitisés du mois <?php echo($month) ?></h1>
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Forfait Etape</th>
                  <th>Frais kilométrique</th>
                  <th>Nuit Hôtel</th>
                  <th>Repas Restaurant</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                <?php
                foreach($fraisforfait as $data)
                    {
                        echo('<td>'.$data['quantite'].'</td>');
                    }?>
                </tr>
                </tbody>
            </table>
        </div>
       </div>
      </div>
    </div>
  </div>
</div>