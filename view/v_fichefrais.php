<div class="container py-5">
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
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